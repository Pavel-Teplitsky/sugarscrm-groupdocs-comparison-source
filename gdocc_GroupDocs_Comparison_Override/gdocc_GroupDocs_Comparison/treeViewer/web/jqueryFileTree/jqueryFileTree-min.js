if(jQuery){(function(A){A.extend(A.fn,{fileTree:function(D,B,C){if(B==undefined){B=function(){}
}if(!D){var D={}
}if(D.root==undefined){D.root="/"
}if(D.script==undefined){D.script="jqueryFileTree.php"
}if(D.folderEvent==undefined){D.folderEvent="click"
}if(D.expandSpeed==undefined){D.expandSpeed=500
}if(D.collapseSpeed==undefined){D.collapseSpeed=500
}if(D.expandEasing==undefined){D.expandEasing=null
}if(D.collapseEasing==undefined){D.collapseEasing=null
}if(D.multiFolder==undefined){D.multiFolder=true
}if(D.loadMessage==undefined){D.loadMessage="Loading..."
}if(D.onTreeShow==undefined){D.onTreeShow=function(){}
}if(D.onServerError==undefined){D.onServerError=function(E){}
}if(D.onServerSuccess==undefined){D.onServerSuccess=function(E){}
}A(this).each(function(){function F(H,G){A(H).addClass("wait");
A(".jqueryFileTree.start").remove();
A.ajax({type:"post",url:D.script,data:{dir:G},success:function(J,K,I){A(H).find(".start").html("");
A(H).removeClass("wait").append(J);
if(escape(D.root)==G){D.onTreeShow();
A(H).find("UL:hidden").show()
}else{A(H).find("UL:hidden").slideDown({duration:D.expandSpeed,easing:D.expandEasing})
}D.onServerSuccess();
E(H)
},error:function(I,K,J){console.log(H);
A(H).removeClass("wait");
A(H).parent().hide();
D.onServerError(I,K,J)
}})
}function E(G){if(C){A(G).find("LI A").bind("dblclick",function(){if(A(this).parent().hasClass("directory")){C(A(this).attr("rel"))
}})
}A(G).find("LI A").bind(D.folderEvent,function(){if(A(this).parent().hasClass("directory")){if(A(this).parent().hasClass("collapsed")){if(!D.multiFolder){A(this).parent().parent().find("UL").slideUp({duration:D.collapseSpeed,easing:D.collapseEasing});
A(this).parent().parent().find("LI.directory").removeClass("expanded").addClass("collapsed")
}A(this).parent().find("UL").remove();
F(A(this).parent(),escape(A(this).attr("rel").match(/.*\//)));
A(this).parent().removeClass("collapsed").addClass("expanded")
}else{A(this).parent().find("UL").slideUp({duration:D.collapseSpeed,easing:D.collapseEasing});
A(this).parent().removeClass("expanded").addClass("collapsed")
}}else{B(A(this).attr("rel"))
}return false
});
if(D.folderEvent.toLowerCase!="click"){A(G).find("LI A").bind("click",function(){return false
})
}}A(this).html('<ul class="jqueryFileTree" style=""><li class="directory collapsed"><a rel="'+D.root+'" href="#">'+D.root+"</a></li></ul>");
E(A(this));
A('A[rel="'+D.root+'"]',A(this)).click()
})
}})
})(jQuery)
};