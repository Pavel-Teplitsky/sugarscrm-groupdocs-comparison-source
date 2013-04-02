<?php
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
//ini_set('display_errors', '0');
//error_reporting(E_ALL | E_STRICT);
/*
 * Created on Mar 23, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require_once('include/MVC/Controller/SugarController.php');
  
  
 class gdocsc_GroupDocs_ComparisonController extends SugarController
{
	function action_save(){

		require_once('include/upload_file.php');
		
		$upload_file = new UploadFile('uploadfile_file');

        //global $DB, $USER;
		// default values
		$height = '300';
		$width = '600';
		$txt = '';

		// form sent
		if(!empty($_POST)) {
//
				$embedKey = strip_tags(stripslashes(trim($_POST['embed_key'])));
//				$apiKey = strip_tags(stripslashes(trim($_POST['api_key'])));
//
//				// GroupDocs Acc details
				if($embedKey){
					$this->bean->embed_key = $embedKey;
//					$this->bean->api_key = $apiKey;
				} else {
					global $current_user;
					// Get groupdocs details if already exist
					$query = "SELECT embed_key FROM gdocsc_groupdocs_comparison 
								WHERE created_by =".$current_user->id." AND deleted=0";
					$result = $GLOBALS['db']->query($query, false);
					while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
						if($row['embed_key']){
							$this->bean->embed_key = $embedKey = $row['embed_key'];
//							$this->bean->api_key = $apiKey = $row['api_key'];
							break;
						}
					}
				}
//
		}

		// 
		$check_notify = false;
		if(!empty($_POST['assigned_user_id']) &&
		    (empty($this->bean->fetched_row) || $this->bean->fetched_row['assigned_user_id'] != $_POST['assigned_user_id']) &&
		    ($_POST['assigned_user_id'] != $GLOBALS['current_user']->id)){
		        $check_notify = true;
		}

		// connect to GroupDocs
//		include_once('treeViewer/groupdocs-php/api/APIClient.php');
//		include_once('treeViewer/groupdocs-php/api/StorageAPI.php');
//		include_once('treeViewer/groupdocs-php/api/DocAPI.php');
//		include_once('treeViewer/groupdocs-php/model/GetDocumentInfoResponse.php');
//		include_once('treeViewer/groupdocs-php/model/GetDocumentInfoResult.php');
//		include_once('treeViewer/groupdocs-php/model/DocumentViewInfo.php');
//		include_once('treeViewer/groupdocs-php/model/DocumentInfo.php');
//		include_once('treeViewer/groupdocs-php/model/UploadResponse.php');
//		include_once('treeViewer/groupdocs-php/model/UploadRequestResult.php');

		// groupdocs api object
//		$apiClient = new APIClient($apiKey, "https://api.groupdocs.com/v2.0");
//		$api = new StorageAPI($apiClient);

		// OPTION 1.
		// Insert file from GroupDocs List (radio buttons)
//		if (isset($_POST['radioFileID']) && $_POST['radioFileID'] && !$_FILES['uploadfile_file']['name']){
//			$this->bean->file_id = $_POST['radioFileID'];
//			$DocAPI = new DocAPI($apiClient);
//			$fileId = $_POST['radioFileID'];
//			$res = $DocAPI->GetDocumentMetadata($clientID, $fileId);
//			// and here, we need to save the File Name to DB
//			$this->bean->document_name = $res->result->last_view->document->name;
//		}

		// OPTION 2.
		// Insert file from File ID
			$this->bean->file_id = $_POST['file_id'];
			$this->bean->document_name = 'File Id: '.$_POST['file_id'];
			// get file name from Groupdocs by ClientID if is set
		if (isset($_POST['file_id']) && $_POST['file_id'] && !$_POST['radioFileID'] && $clientID){
//			$DocAPI = new DocAPI($apiClient);
			$fileId = $_POST['file_id'];
//			$res = $DocAPI->GetDocumentMetadata($clientID, $fileId);
//			// and here, we need to save the File Name to DB
//			$this->bean->document_name = $res->result->last_view->document->name;
		}

		// height width
		if(isset($_POST['height']) && $_POST['height']) $height = $_POST['height'];
		if(isset($_POST['width']) && $_POST['width']) $width = $_POST['width'];

			// All files in sugar saved without extention and file_name==record_id
			// file doc manipulation
			// OPTION 3.
//			if($_FILES['uploadfile_file']['name'] && $clientID && $apiKey){
//				// get file extention
//				$file_ext = substr($_FILES['uploadfile_file']['name'],strrpos($_FILES['uploadfile_file']['name'],'.')+1);
//				// file name without extention
//				$sugar_file_id = $this->bean->id;
//
//				// Uploaded file directory
//				$uploads_dir = dirname(__FILE__).'/../../upload';
//				
//				if(file_exists("$uploads_dir/$sugar_file_id")){
//					// so for Groupdocs API, we need to point proper file with extention, renaming file
//					rename("$uploads_dir/$sugar_file_id", "$uploads_dir/$sugar_file_id.$file_ext");
//					$name = $_FILES["uploadfile_file"]["name"];
//					$result = $api->Upload($clientID, $name, 'uploaded', "file://$uploads_dir/$sugar_file_id.$file_ext");
//					// and renameing back
//					rename("$uploads_dir/$sugar_file_id.$file_ext","$uploads_dir/$sugar_file_id");
//				}
//
//				// assign Groupdocs API "file_id" and "document_name", if file was uploaded
//				if (isset($result->result->guid) && $result->result->guid) { 
//					$this->bean->file_id = $result->result->guid;
//					$this->bean->document_name  = $result->result->adj_name;
//				}
//			//print '<br><br>'.$this->bean->file_id;
//			//exit;
//		}
        
        $cmsName = "SugarCRM";
        $cmsVersion = "1.0";
		$this->bean->iframe = '<iframe id="groupdocs_comparison_iframe" height="500" frameborder="0" width="100%" src="https://apps.groupdocs.com/document-comparison/embed/'.$this->bean->embed_key.'/'.$this->bean->file_id.'?&referer=' . $cmsName . '/' . $cmsVersion . '"></iframe>';

		$this->bean->save($check_notify);
	}
	
    function action_editview(){
		$this->view = 'edit';
		$GLOBALS['view'] = $this->view;
		if(!empty($_REQUEST['deleteAttachment'])){
			ob_clean();
			echo $this->bean->deleteAttachment($_REQUEST['isDuplicate']) ? 'true' : 'false';
			sugar_cleanup(true);
		}

	}
	

}
?>
