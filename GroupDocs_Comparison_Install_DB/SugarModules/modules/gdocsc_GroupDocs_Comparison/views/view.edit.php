<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
require_once('include/MVC/View/views/view.edit.php');
class gdocsc_GroupDocs_ComparisonViewEdit extends ViewEdit{
 	function gdocsc_GroupDocs_ComparisonViewEdit(){
 		parent::ViewEdit();
 	}
 	function display(){

		// some bolex
		if (isset($this->bean->id)) {
			$this->ss->assign("FILE_OR_HIDDEN", "hidden");
			if (empty($_REQUEST['isDuplicate']) || $_REQUEST['isDuplicate'] == 'false') {
				$this->ss->assign("DISABLED", "disabled");
			}
		} else {
			$this->ss->assign("FILE_OR_HIDDEN", "file");
		}


//////////
		//  Files at GroupDocs Account
//			include_once('/../treeViewer/groupdocs-php/api/APIClient.php');
//			include_once('/../treeViewer/groupdocs-php/api/StorageAPI.php');
//			include_once('/../treeViewer/groupdocs-php/model/StorageStorageInputFoldersInput.php');

			$path = $_POST['dir'];
			if ($path == null || $path == "/") {
				$path = "";
			} 
				
//			$privateKey = $this->bean->api_key;
			$embedKey = $this->bean->embed_key;

//			if($embedKey){
//				$apiClient = new APIClient($privateKey, "https://api.groupdocs.com/v2.0");
//
//				$api = new StorageAPI($apiClient);
//
//				$cur_p = new StorageStorageInputFoldersInput();
//				$cur_p->userId = $userId;
//				$cur_p->path = substr($path, 0, strlen($path)-1);
//				
//				$cur_p->pageIndex = '0';
//				$cur_p->pageSize = '10';
//				$cur_p->orderBy = '';
//				$cur_p->orderAsc = 'false';
//				$cur_p->filter = '';
//				$cur_p->fileTypes = '';
//				$cur_p->extended = 'false'; 
//			
//				$result = $api->ListEntities($cur_p);
//				
//				$files = $result->result->files;
//				$folders = $result->result->folders;
//
//				$listContainer = '<div id="GdList" style="background-color:#e5e5e5;border:3px double gray;width:500px;padding:3px;font-size:10pt;">';
//				print $listContainer;
//				// Folders
//				print "<ul class=\"jqueryFileTree\" style=\"display: ;\">";
//				foreach($folders as $item) {
//								print("<li class=\"directory collapsed\"><a href=\"#\" rel=\"" .
//													  $path . $item->name . "/\">" . $item->name . "</a></li>");
//				}
//				print "</ul>";
//				
//				// Files
//				foreach($files as $k=>$item) {
//					print("<input id='radio_$k' class='radio' type='radio' name='radioFileID' value='$item->guid' /> 
//							<span style='cursor: pointer;color:blue;text-decoration:underline;' onclick='var radio = document.getElementsByTagName(\"input\");for (var i = 0; i < radio.length; i++){if (radio[i].className.match(/radio/)){radio[i].checked=false;}}document.getElementById(\"radio_$k\").checked=true;'>$item->name</span><br />");
//
//					//print("<li class=\"file ext_" . $item->file_type . "\"><a class='iframe' href='" . $href . "' rel=\"" .
//					//                                                $item->guid . "\">" . $item->name . "</a></li>");
//				}
//				print '</div>';
//			}

// Human js view. JS to exchange <input type="text" id="iframe"> on GroupDocs Document List
// (too mach hook encapsulations and not much documentation, just to change form inputs, so quick way)

		print '<script>';
		// delay cos 'sugarcrm form' is actualy builded by js
		print 'setTimeout(function(){';
		
		// get parent node of 
		print 'var ifrmContainer = document.getElementById("iframe").parentNode;';
		print 'var ifrm = document.getElementById("iframe");';
		// create node, there will be the list
//		print 'var GroupDocsList = document.createElement("div");';
//		print 'GroupDocsList.setAttribute("id", "GroupDocsList");';
//		print 'ifrmContainer.appendChild(GroupDocsList);';
		// remove <iframe>
		print '$("#iframe").remove();';
		print "$('#iframe_label').children().remove();";

		// show listn in container
//		print 'if($("#GdList").length>0){';
//			print 'var GdList = document.getElementById("GdList").innerHTML;';
//			print '$("#GdList").remove();';// actulally we can use jQuery here
//			print 'var GdListContainer = document.getElementById("GroupDocsList");';
//			print 'ifrm.style.display = "none";';
//			print '$("#iframe_label").html("");';
//			print "GdListContainer.innerHTML = '$listContainer'+GdList+'</div>';";
//		print '}';

				global $current_user;
				// Get groupdocs details if already exist
				$query = "SELECT embed_key FROM gdocsc_groupdocs_comparison 
							WHERE created_by =".$current_user->id." AND deleted=0";
				$result = $GLOBALS['db']->query($query, false);
				$embedKey = ''; 
				while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
					if($row['embed_key']){
						$embedKey = $row['embed_key'];
//						$apiKey = $row['api_key'];
						break;
					}
				}
		// Group Docs validator
		if(!$embedKey){
			print '$("#SAVE_FOOTER").attr("onmouseover","alowUpload();");';
			print '$("#SAVE_HEADER").attr("onmouseover","alowUpload();");';
		} else {
			print '$("#embed_key").val("'.$embedKey.'");';
//			print '$("#api_key").val("'.$apiKey.'");';
		}
		print '},1500);';

		// Group Docs validator
//		print 'function alowUpload(){';
//			print 'if(($("#client_id").val()=="" || $("#api_key").val()=="") && $("#uploadfile_file").val()!="" && $("#file_id").val()==""){ ';
//				print 'alert("Sorry, but you have to Save your GroupDocs Details before File Upload.");';
//			print '}';
//			print 'if($("#file_id").val()=="" && $("#uploadfile_file").val()==""){ ';
//				print 'alert("There is nothing to save.");';
//			print '}';
//		print '}';

		print '</script>';



		parent::display();
 	}
}

?>