var FILE_BROWSER_PAGE=2;
(function(A){if(AJS.version>="3.5.0"){FILE_BROWSER_PAGE=3
}GroupdocsBrowser=function(C){console.log("GroupdocsBrowser... ");
this.options=C;
var B="";
if(this.options.isFolder){B="Double click to select a folder."
}else{B="Click to select a file."
}var E='<div class="aui-message shadowed"><p class="title"><span class="aui-icon icon-generic"></span>'+B+"</p></div>";
var D=E+'<div name="groupdocsBrowser" class=""><div name="groupdocsBrowserInner"></div></div>';
this.element=AJS.$(D);
this.dialog=null
};
GroupdocsBrowser.prototype.setDialog=function(B){console.log(B);
if(!B.page[FILE_BROWSER_PAGE]){B.addPage().addHeader("File Picker").addPanel("SinglePanel","singlePanel");
B.addButton("Back",function(C){C.gotoPage(1)
},"back left box");
B.addButton("Cancel",function(C){C.hide()
},"cancel");
B.gotoPage(1)
}B.page[FILE_BROWSER_PAGE].getCurrentPanel().html(this.element);
this.dialog=B
};
GroupdocsBrowser.prototype.loadFileTree=function(){console.log("GroupdocsBrowser.prototype.loadFileTree");
var B=this.options.contextPath;
var D={root:"/",script:B+"/plugins/servlet/groupdocs/list",onTreeShow:function(){},onServerError:function(G){var H="Unable to retrieve data due to an error.";
if(G.status==403){H='<span class="aui-icon icon-warning"></span><span>Confluence is currently not authorized to retrieve data on your behalf or the token is invalid. To authorize, please click <a href="'+B+'/users/plugins/groupdocs/account.action">here</a>.</span>'
}var F=AJS.$("div[name='groupdocsBrowser']",this.element);
F.append(AJS.$("<div class='aui-message warning'>"+H+"</div>"))
}};
var C=this;
var E=function(G){console.log(G+" selected in browser");
var F=jQuery("#macro-param-path");
F.val(G);
F.change();
A("#macro-browser-preview-link").click();
C.dialog.gotoPage(1)
};
if(this.options.isFolder){AJS.$("div[name='groupdocsBrowserInner']",this.element).fileTree(D,undefined,E)
}else{AJS.$("div[name='groupdocsBrowserInner']",this.element).fileTree(D,E)
}}
})(AJS.$);