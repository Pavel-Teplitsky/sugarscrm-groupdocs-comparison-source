jQuery(function(){loadFileTree()
});
function loadFileTree(){var D=AJS.$("div[name='groupdocsBrowser']");
var B=AJS.$("div[name='groupdocsBrowserInner']",D);
var F=AJS.$("input[name='path']",D).val();
var C=AJS.$("input[name='width']",D).val();
var A=AJS.$("input[name='height']",D).val();
var E={root:F,script:contextPath+"/plugins/servlet/groupdocs/list",onTreeShow:function(){},onServerSuccess:function(){jQuery("a.iframe",B).each(function(){var H=jQuery(this);
if(H.hasClass("image-doc")){H.gfancybox({titleShow:false})
}else{H.gfancybox({type:"iframe",width:parseInt(C),height:parseInt(A),titleShow:false})
}})
},onServerError:function(H){var I="Unable to retrieve data due to an error.";
D.append(AJS.$("<div class='aui-message warning'>"+I+"</div>"))
}};
var G=function(H){H=H.substr(0,H.length-1);
console.log(H+" selected in browser")
};
B.fileTree(E)
};