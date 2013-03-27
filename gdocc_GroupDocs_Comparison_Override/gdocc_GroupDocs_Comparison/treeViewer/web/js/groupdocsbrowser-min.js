(function(B){var A=AJS.Data.get("context-path");
AJS.MacroBrowser.setMacroJsOverride("groupdocs-doc",{beforeParamsSet:function(E,C){var D=new GroupdocsBrowser({contextPath:A});
D.setDialog(AJS.MacroBrowser.dialog);
D.loadFileTree();
var F=AJS.$("<button>Select document</button>");
AJS.$(".button-panel-button",this.element).show();
AJS.$("#macro-param-div-path").append(F);
AJS.$("#macro-param-path").hide();
F.click(function(G){D.selectedDocuments=[];
D.input=AJS.$("#macro-param-div-path");
D.dialog.gotoPage(FILE_BROWSER_PAGE);
G.preventDefault()
});
return E
}});
AJS.MacroBrowser.setMacroJsOverride("groupdocs-folder",{beforeParamsSet:function(E,C){var D=new GroupdocsBrowser({isFolder:true,contextPath:A,onFolderSelected:function(G){alert(G)
}});
D.setDialog(AJS.MacroBrowser.dialog);
D.loadFileTree();
var F=AJS.$("<button>Select folder</button>");
AJS.$(".button-panel-button",this.element).show();
AJS.$("#macro-param-div-path").append(F);
AJS.$("#macro-param-path").hide();
F.click(function(G){D.selectedDocuments=[];
D.input=AJS.$("#macro-param-div-path");
D.dialog.gotoPage(FILE_BROWSER_PAGE);
G.preventDefault()
});
return E
}})
})(AJS.$);