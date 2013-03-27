<div class="" name="groupdocsBrowser">
	<div class="" name="groupdocsBrowserInner">
	</div>
</div>


<script type="text/javascript"  >
AJS = {};
AJS.$ = $;
contextPath = '/';
Drupal = window.parent.Drupal;
</script>

<script type="text/javascript"  >
$(function () {
	loadFileTree();
});

function loadFileTree(){
	var parent = AJS.$("div[name='groupdocsBrowser']");
	var container = AJS.$("div[name='groupdocsBrowserInner']", parent);
	var selectedFolder = AJS.$("input[name='path']", parent).val();
//console.log(selectedFolder);

	var selectedWidth = AJS.$("input[name='width']", parent).val();
	var selectedHeight = AJS.$("input[name='height']", parent).val();
	var opts = {
		root: selectedFolder,
		script: contextPath + './groupdocs_field/treeviewer',
		onTreeShow: function(){
//			parent.removeClass("fileTree-loading");
		},
		onServerSuccess: function(){
			jQuery("a", container).each(function() {
				var self = jQuery(this);

				if(self.parent().hasClass("file")) {
					self.on('click', function(){
						window.parent.document.getElementById('edit-field-groupdocs-und-0-groupdocs-embedded-code').value = self.attr('rel');
						window.parent.jQuery.fancybox.close();
					})
				}
			});
		},
		onServerError: function(response) {
			var message = "Unable to retrieve data due to an error.";
//			parent.removeClass("fileTree-loading");
			parent.append(AJS.$("<div class='aui-message warning'>" + message + "</div>"));
		}
	};
	container.fileTree(opts);
}
</script>



