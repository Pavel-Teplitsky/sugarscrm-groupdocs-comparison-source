(function(b){var l,t,q,m,D,M,j,a,o,Z,c=0,h={},J=[],E=0,g={},Y=[],F=null,O=new Image(),I=/\.(jpg|gif|png|bmp|jpeg)(.*)?$/i,K=/[^\.]\.(swf)\s*$/i,P,n=1,H=0,T="",B,C,p=false,S=b.extend(b("<div/>")[0],{prop:0}),s=b.browser.msie&&b.browser.version<7&&!window.XMLHttpRequest,R=function(){t.hide();
O.onerror=O.onload=null;
if(F){F.abort()
}l.empty()
},X=function(){if(false===h.onError(J,c,h)){t.hide();
p=false;
return 
}h.titleShow=false;
h.width="auto";
h.height="auto";
l.html('<p id="gfancybox-error">The requested content cannot be loaded.<br />Please try again later.</p>');
N()
},W=function(){var z=J[c],w,y,AB,AA,v,x;
R();
h=b.extend({},b.fn.gfancybox.defaults,(typeof b(z).data("gfancybox")=="undefined"?h:b(z).data("gfancybox")));
x=h.onStart(J,c,h);
if(x===false){p=false;
return 
}else{if(typeof x=="object"){h=b.extend(h,x)
}}AB=h.title||(z.nodeName?b(z).attr("title"):z.title)||"";
h.orig=b(z).is("img")&&b(z);
if(z.nodeName&&!h.orig){h.orig=b(z).children("img:first").length?b(z).children("img:first"):b(z)
}if(AB===""&&h.orig&&h.titleFromAlt){AB=h.orig.attr("alt")
}w=h.href||(z.nodeName?b(z).attr("href"):z.href)||null;
if((/^(?:javascript)/i).test(w)||w=="#"){w=null
}if(h.type){y=h.type;
if(!w){w=h.content
}}else{if(h.content){y="html"
}else{if(h.dataAttr){y="dataAttribute";
w=h.orig.attr("data-"+h.dataAttr)
}else{if(w){if(w.match(I)){y="image"
}else{if(w.match(K)){y="swf"
}else{if(b(z).hasClass("iframe")){y="iframe"
}else{if(w.indexOf("#")===0){y="inline"
}else{y="ajax"
}}}}}}}}if(!y){X();
return 
}if(y=="inline"){z=w.substr(w.indexOf("#"));
y=b(z).length>0?"inline":"ajax"
}h.type=y;
h.href=w;
h.title=AB;
if(h.autoDimensions){if(h.type=="html"||h.type=="inline"||h.type=="ajax"){h.width="auto";
h.height="auto"
}else{h.autoDimensions=false
}}if(h.modal){h.overlayShow=true;
h.hideOnOverlayClick=false;
h.hideOnContentClick=false;
h.enableEscapeButton=false;
h.showCloseButton=false
}h.padding=parseInt(h.padding,10);
h.margin=parseInt(h.margin,10);
l.css("padding",(h.padding+h.margin));
b(".gfancybox-inline-tmp").unbind("gfancybox-cancel").bind("gfancybox-change",function(){b(this).replaceWith(M.children())
});
switch(y){case"html":l.html(h.content);
N();
break;
case"inline":if(b(z).parent().is("#gfancybox-content")===true){p=false;
return 
}b('<div class="gfancybox-inline-tmp" />').hide().insertBefore(b(z)).bind("gfancybox-cleanup",function(){b(this).replaceWith(M.children())
}).bind("gfancybox-cancel",function(){b(this).replaceWith(l.children())
});
b(z).appendTo(l);
N();
break;
case"image":case"dataAttribute":p=false;
b.gfancybox.showActivity();
O=new Image();
O.onerror=function(){X()
};
O.onload=function(){p=true;
O.onerror=O.onload=null;
f()
};
O.src=w;
break;
case"swf":h.scrolling="no";
AA='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="'+h.width+'" height="'+h.height+'"><param name="movie" value="'+w+'"></param>';
v="";
b.each(h.swf,function(AC,AD){AA+='<param name="'+AC+'" value="'+AD+'"></param>';
v+=" "+AC+'="'+AD+'"'
});
AA+='<embed src="'+w+'" type="application/x-shockwave-flash" width="'+h.width+'" height="'+h.height+'"'+v+"></embed></object>";
l.html(AA);
N();
break;
case"ajax":p=false;
b.gfancybox.showActivity();
h.ajax.win=h.ajax.success;
F=b.ajax(b.extend({},h.ajax,{url:w,data:h.ajax.data||{},error:function(AC,AE,AD){if(AC.status>0){X()
}},success:function(AD,AF,AC){var AE=typeof AC=="object"?AC:F;
if(AE.status==200){if(typeof h.ajax.win=="function"){x=h.ajax.win(w,AD,AF,AC);
if(x===false){t.hide();
return 
}else{if(typeof x=="string"||typeof x=="object"){AD=x
}}}l.html(AD);
N()
}}}));
break;
case"iframe":e();
break
}},N=function(){var v=h.width,x=h.height;
if(v.toString().indexOf("%")>-1){v=parseInt((b(window).width()-(h.margin*2))*parseFloat(v)/100,10)+"px"
}else{v=v=="auto"?"auto":v+"px"
}if(x.toString().indexOf("%")>-1){x=parseInt((b(window).height()-(h.margin*2))*parseFloat(x)/100,10)+"px"
}else{x=x=="auto"?"auto":x+"px"
}l.wrapInner('<div style="width:'+v+";height:"+x+";overflow: "+(h.scrolling=="auto"?"auto":(h.scrolling=="yes"?"scroll":"hidden"))+';position:relative;"></div>');
h.width=l.width();
h.height=l.height();
e()
},f=function(){h.width=O.width;
h.height=O.height;
b("<img />").attr({id:"gfancybox-img",src:O.src,alt:h.title}).appendTo(l);
e()
},e=function(){var w,v;
t.hide();
if(m.is(":visible")&&false===g.onCleanup(Y,E,g)){b.event.trigger("gfancybox-cancel");
p=false;
return 
}p=true;
b(M.add(q)).unbind();
b(window).unbind("resize.fb scroll.fb");
b(document).unbind("keydown.fb");
if(m.is(":visible")&&g.titlePosition!=="outside"){m.css("height",m.height())
}Y=J;
E=c;
g=h;
if(g.overlayShow){q.css({"background-color":g.overlayColor,opacity:g.overlayOpacity,cursor:g.hideOnOverlayClick?"pointer":"auto",height:b(document).height()});
if(!q.is(":visible")){if(s){b("select:not(#gfancybox-tmp select)").filter(function(){return this.style.visibility!=="hidden"
}).css({visibility:"hidden"}).one("gfancybox-cleanup",function(){this.style.visibility="inherit"
})
}q.show()
}}else{q.hide()
}C=r();
L();
if(m.is(":visible")){b(j.add(o).add(Z)).hide();
w=m.position();
B={top:w.top,left:w.left,width:m.width(),height:m.height()};
v=(B.width==C.width&&B.height==C.height);
M.fadeTo(g.changeFade,0.3,function(){var x=function(){M.html(l.contents()).fadeTo(g.changeFade,1,V)
};
b.event.trigger("gfancybox-change");
M.empty().removeAttr("filter").css({"border-width":g.padding,width:C.width-g.padding*2,height:h.autoDimensions?"auto":C.height-H-g.padding*2});
if(v){x()
}else{S.prop=0;
b(S).animate({prop:1},{duration:g.changeSpeed,easing:g.easingChange,step:u,complete:x})
}});
return 
}m.removeAttr("style");
M.css("border-width",g.padding);
if(g.transitionIn=="elastic"){B=i();
M.html(l.contents());
m.show();
if(g.opacity){C.opacity=0
}S.prop=0;
b(S).animate({prop:1},{duration:g.speedIn,easing:g.easingIn,step:u,complete:V});
return 
}if(g.titlePosition=="inside"&&H>0){a.show()
}M.css({width:C.width-g.padding*2,height:h.autoDimensions?"auto":C.height-H-g.padding*2}).html(l.contents());
m.css(C).fadeIn(g.transitionIn=="none"?0:g.speedIn,V)
},d=function(v){if(v&&v.length){if(g.titlePosition=="float"){return'<table id="gfancybox-title-float-wrap" cellpadding="0" cellspacing="0"><tr><td id="gfancybox-title-float-left"></td><td id="gfancybox-title-float-main">'+v+'</td><td id="gfancybox-title-float-right"></td></tr></table>'
}return'<div id="gfancybox-title-'+g.titlePosition+'">'+v+"</div>"
}return false
},L=function(){T=g.title||"";
H=0;
a.empty().removeAttr("style").removeClass();
if(g.titleShow===false){a.hide();
return 
}T=b.isFunction(g.titleFormat)?g.titleFormat(T,Y,E,g):d(T);
if(!T||T===""){a.hide();
return 
}a.addClass("gfancybox-title-"+g.titlePosition).html(T).appendTo("body").show();
switch(g.titlePosition){case"inside":a.css({width:C.width-(g.padding*2),marginLeft:g.padding,marginRight:g.padding});
H=a.outerHeight(true);
a.appendTo(D);
C.height+=H;
break;
case"over":a.css({marginLeft:g.padding,width:C.width-(g.padding*2),bottom:g.padding}).appendTo(D);
break;
case"float":a.css("left",parseInt((a.width()-C.width-40)/2,10)*-1).appendTo(m);
break;
default:a.css({width:C.width-(g.padding*2),paddingLeft:g.padding,paddingRight:g.padding}).appendTo(m);
break
}a.hide()
},G=function(){if(g.enableEscapeButton||g.enableKeyboardNav){b(document).bind("keydown.fb",function(v){if(v.keyCode==27&&g.enableEscapeButton){v.preventDefault();
b.gfancybox.close()
}else{if((v.keyCode==37||v.keyCode==39)&&g.enableKeyboardNav&&v.target.tagName!=="INPUT"&&v.target.tagName!=="TEXTAREA"&&v.target.tagName!=="SELECT"){v.preventDefault();
b.gfancybox[v.keyCode==37?"prev":"next"]()
}}})
}if(!g.showNavArrows){o.hide();
Z.hide();
return 
}if((g.cyclic&&Y.length>1)||E!==0){o.show()
}if((g.cyclic&&Y.length>1)||E!=(Y.length-1)){Z.show()
}},V=function(){if(!b.support.opacity){M.get(0).style.removeAttribute("filter");
m.get(0).style.removeAttribute("filter")
}if(h.autoDimensions){M.css("height","auto")
}m.css("height","auto");
if(T&&T.length){a.show()
}if(g.showCloseButton){j.show()
}G();
if(g.hideOnContentClick){M.bind("click",b.gfancybox.close)
}if(g.hideOnOverlayClick){q.bind("click",b.gfancybox.close)
}b(window).bind("resize.fb",b.gfancybox.resize);
if(g.centerOnScroll){b(window).bind("scroll.fb",b.gfancybox.center)
}if(g.type=="iframe"){b('<iframe id="gfancybox-frame" name="gfancybox-frame'+new Date().getTime()+'" frameborder="0" hspace="0" '+(b.browser.msie?'allowtransparency="true""':"")+' scrolling="'+h.scrolling+'" src="'+g.href+'"></iframe>').appendTo(M)
}m.show();
p=false;
b.gfancybox.center();
g.onComplete(Y,E,g);
k()
},k=function(){var v,w;
if((Y.length-1)>E){v=Y[E+1].href;
if(typeof v!=="undefined"&&v.match(I)){w=new Image();
w.src=v
}}if(E>0){v=Y[E-1].href;
if(typeof v!=="undefined"&&v.match(I)){w=new Image();
w.src=v
}}},u=function(w){var v={width:parseInt(B.width+(C.width-B.width)*w,10),height:parseInt(B.height+(C.height-B.height)*w,10),top:parseInt(B.top+(C.top-B.top)*w,10),left:parseInt(B.left+(C.left-B.left)*w,10)};
if(typeof C.opacity!=="undefined"){v.opacity=w<0.5?0.5:w
}m.css(v);
M.css({width:v.width-g.padding*2,height:v.height-(H*w)-g.padding*2})
},U=function(){return[b(window).width()-(g.margin*2),b(window).height()-(g.margin*2),b(document).scrollLeft()+g.margin,b(document).scrollTop()+g.margin]
},r=function(){var v=U(),z={},w=g.autoScale,x=g.padding*2,y;
if(g.width.toString().indexOf("%")>-1){z.width=parseInt((v[0]*parseFloat(g.width))/100,10)
}else{z.width=g.width+x
}if(g.height.toString().indexOf("%")>-1){z.height=parseInt((v[1]*parseFloat(g.height))/100,10)
}else{z.height=g.height+x
}if(w&&(z.width>v[0]||z.height>v[1])){if(h.type=="image"||h.type=="dataAttribute"||h.type=="swf"){y=(g.width)/(g.height);
if((z.width)>v[0]){z.width=v[0];
z.height=parseInt(((z.width-x)/y)+x,10)
}if((z.height)>v[1]){z.height=v[1];
z.width=parseInt(((z.height-x)*y)+x,10)
}}else{z.width=Math.min(z.width,v[0]);
z.height=Math.min(z.height,v[1])
}}z.top=parseInt(Math.max(v[3]-20,v[3]+((v[1]-z.height-40)*0.5)),10);
z.left=parseInt(Math.max(v[2]-20,v[2]+((v[0]-z.width-40)*0.5)),10);
return z
},Q=function(v){var w=v.offset();
w.top+=parseInt(v.css("paddingTop"),10)||0;
w.left+=parseInt(v.css("paddingLeft"),10)||0;
w.top+=parseInt(v.css("border-top-width"),10)||0;
w.left+=parseInt(v.css("border-left-width"),10)||0;
w.width=v.width();
w.height=v.height();
return w
},i=function(){var y=h.orig?b(h.orig):false,x={},w,v;
if(y&&y.length){w=Q(y);
x={width:w.width+(g.padding*2),height:w.height+(g.padding*2),top:w.top-g.padding-20,left:w.left-g.padding-20}
}else{v=U();
x={width:g.padding*2,height:g.padding*2,top:parseInt(v[3]+v[1]*0.5,10),left:parseInt(v[2]+v[0]*0.5,10)}
}return x
},A=function(){if(!t.is(":visible")){clearInterval(P);
return 
}b("div",t).css("top",(n*-40)+"px");
n=(n+1)%12
};
b.fn.gfancybox=function(v){if(!b(this).length){return this
}b(this).data("gfancybox",b.extend({},v,(b.metadata?b(this).metadata():{}))).unbind("click.fb").bind("click.fb",function(x){x.preventDefault();
if(p){return 
}p=true;
b(this).blur();
J=[];
c=0;
var w=b(this).attr("rel")||"";
if(!w||w==""||w==="nofollow"){J.push(this)
}else{J=b("a[rel="+w+"], area[rel="+w+"]");
c=J.index(this)
}W();
return 
});
return this
};
b.gfancybox=function(y){var x;
if(p){return 
}p=true;
x=typeof arguments[1]!=="undefined"?arguments[1]:{};
J=[];
c=parseInt(x.index,10)||0;
if(b.isArray(y)){for(var w=0,v=y.length;
w<v;
w++){if(typeof y[w]=="object"){b(y[w]).data("gfancybox",b.extend({},x,y[w]))
}else{y[w]=b({}).data("gfancybox",b.extend({content:y[w]},x))
}}J=jQuery.merge(J,y)
}else{if(typeof y=="object"){b(y).data("gfancybox",b.extend({},x,y))
}else{y=b({}).data("gfancybox",b.extend({content:y},x))
}J.push(y)
}if(c>J.length||c<0){c=0
}W()
};
b.gfancybox.showActivity=function(){clearInterval(P);
t.show();
P=setInterval(A,66)
};
b.gfancybox.hideActivity=function(){t.hide()
};
b.gfancybox.next=function(){return b.gfancybox.pos(E+1)
};
b.gfancybox.prev=function(){return b.gfancybox.pos(E-1)
};
b.gfancybox.pos=function(v){if(p){return 
}v=parseInt(v,10);
J=Y;
if(v>-1&&v<Y.length){c=v;
W()
}else{if(g.cyclic&&Y.length>1){c=v>=Y.length?0:Y.length-1;
W()
}}return 
};
b.gfancybox.cancel=function(){if(p){return 
}p=true;
b.event.trigger("gfancybox-cancel");
R();
h.onCancel(J,c,h);
p=false
};
b.gfancybox.close=function(){if(p||m.is(":hidden")){return 
}p=true;
if(g&&false===g.onCleanup(Y,E,g)){p=false;
return 
}R();
b(j.add(o).add(Z)).hide();
b(M.add(q)).unbind();
b(window).unbind("resize.fb scroll.fb");
b(document).unbind("keydown.fb");
M.find("iframe").attr("src",s&&/^https/i.test(window.location.href||"")?"javascript:void(false)":"about:blank");
if(g.titlePosition!=="inside"){a.empty()
}m.stop();
function v(){q.fadeOut("fast");
a.empty().hide();
m.hide();
b.event.trigger("gfancybox-cleanup");
M.empty();
g.onClosed(Y,E,g);
Y=h=[];
E=c=0;
g=h={};
p=false
}if(g.transitionOut=="elastic"){B=i();
var w=m.position();
C={top:w.top,left:w.left,width:m.width(),height:m.height()};
if(g.opacity){C.opacity=1
}a.empty().hide();
S.prop=1;
b(S).animate({prop:0},{duration:g.speedOut,easing:g.easingOut,step:u,complete:v})
}else{m.fadeOut(g.transitionOut=="none"?0:g.speedOut,v)
}};
b.gfancybox.resize=function(){if(q.is(":visible")){q.css("height",b(document).height())
}b.gfancybox.center(true)
};
b.gfancybox.center=function(){var v,w;
if(p){return 
}w=arguments[0]===true?1:0;
v=U();
if(!w&&(m.width()>v[0]||m.height()>v[1])){return 
}m.stop().animate({top:parseInt(Math.max(v[3]-20,v[3]+((v[1]-M.height()-40)*0.5)-g.padding),10),left:parseInt(Math.max(v[2]-20,v[2]+((v[0]-M.width()-40)*0.5)-g.padding),10)},typeof arguments[0]=="number"?arguments[0]:200)
};
b.gfancybox.init=function(){if(b("#gfancybox-wrap").length){return 
}b("body").append(l=b('<div id="gfancybox-tmp"></div>'),t=b('<div id="gfancybox-loading"><div></div></div>'),q=b('<div id="gfancybox-overlay"></div>'),m=b('<div id="gfancybox-wrap"></div>'));
D=b('<div id="gfancybox-outer"></div>').append('<div class="gfancybox-bg" id="gfancybox-bg-n"></div><div class="gfancybox-bg" id="gfancybox-bg-ne"></div><div class="gfancybox-bg" id="gfancybox-bg-e"></div><div class="gfancybox-bg" id="gfancybox-bg-se"></div><div class="gfancybox-bg" id="gfancybox-bg-s"></div><div class="gfancybox-bg" id="gfancybox-bg-sw"></div><div class="gfancybox-bg" id="gfancybox-bg-w"></div><div class="gfancybox-bg" id="gfancybox-bg-nw"></div>').appendTo(m);
D.append(M=b('<div id="gfancybox-content"></div>'),j=b('<a id="gfancybox-close"></a>'),a=b('<div id="gfancybox-title"></div>'),o=b('<a href="javascript:;" id="gfancybox-left"><span class="fancy-ico" id="gfancybox-left-ico"></span></a>'),Z=b('<a href="javascript:;" id="gfancybox-right"><span class="fancy-ico" id="gfancybox-right-ico"></span></a>'));
j.click(b.gfancybox.close);
t.click(b.gfancybox.cancel);
o.click(function(v){v.preventDefault();
b.gfancybox.prev()
});
Z.click(function(v){v.preventDefault();
b.gfancybox.next()
});
if(b.fn.mousewheel){m.bind("mousewheel.fb",function(v,w){if(p){v.preventDefault()
}else{if(b(v.target).get(0).clientHeight==0||b(v.target).get(0).scrollHeight===b(v.target).get(0).clientHeight){v.preventDefault();
b.gfancybox[w>0?"prev":"next"]()
}}})
}if(!b.support.opacity){m.addClass("gfancybox-ie")
}if(s){t.addClass("gfancybox-ie6");
m.addClass("gfancybox-ie6");
b('<iframe id="gfancybox-hide-sel-frame" src="'+(/^https/i.test(window.location.href||"")?"javascript:void(false)":"about:blank")+'" scrolling="no" border="0" frameborder="0" tabindex="-1"></iframe>').prependTo(D)
}};
b.fn.gfancybox.defaults={padding:10,margin:20,opacity:false,modal:false,cyclic:false,scrolling:"auto",width:560,height:340,autoScale:true,autoDimensions:true,centerOnScroll:false,ajax:{},swf:{wmode:"transparent"},hideOnOverlayClick:true,hideOnContentClick:false,overlayShow:true,overlayOpacity:0.7,overlayColor:"#777",titleShow:true,titlePosition:"float",titleFormat:null,titleFromAlt:false,transitionIn:"fade",transitionOut:"fade",speedIn:300,speedOut:300,changeSpeed:300,changeFade:"fast",easingIn:"swing",easingOut:"swing",showCloseButton:true,showNavArrows:true,enableEscapeButton:true,enableKeyboardNav:true,onStart:function(){},onCancel:function(){},onComplete:function(){},onCleanup:function(){},onClosed:function(){},onError:function(){}};
b(document).ready(function(){b.gfancybox.init()
})
})(jQuery);