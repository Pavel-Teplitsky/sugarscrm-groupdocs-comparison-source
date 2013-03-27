<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

	include_once('./groupdocs-php/api/APIClient.php');
    include_once('./groupdocs-php/api/StorageAPI.php');
    include_once('./groupdocs-php/model/StorageStorageInputFoldersInput.php');
    

    $privateKey = '1cbba94ae1ae74b197c90d2effdd9afb';
	$userId = '2a0e14bfb157864c';
	$apiClient = new APIClient($privateKey, "https://api.groupdocs.com/v2.0");

	$api = new StorageAPI($apiClient);

	$cur_p = new StorageStorageInputFoldersInput();
		$cur_p->userId = $userId;
		$cur_p->path = '';
		$cur_p->pageIndex = '0';
		$cur_p->pageSize = '10';
		$cur_p->orderBy = '';
		$cur_p->orderAsc = 'false';
		$cur_p->filter = '';
		$cur_p->fileTypes = '';
		$cur_p->extended = 'false'; 
	
	$result = $api->ListEntities($cur_p);
	
	$files = $result->result->files;
	$folders = $result->result->folders;
	//~ var_dump("<hr>");
	//~ var_dump($result->result->folders);
	//~ var_dump("<hr>");
	//~ var_dump($result->result->files);
	//~ var_dump("<hr>");
	
	print("<ul class=\"jqueryFileTree\" style=\"display: ;\">");
    foreach($folders as $item) {
	    //~ if($item->guid == null) {
		    print("<li class=\"directory collapsed\"><a href=\"#\" rel=\"" .
					     $item->name . "\">" . $item->name . "</a></li>");
	    //~ }
    }
    foreach($files as $item) {
	    //~ if($item->guid != null) {
		    $href = $item->guid;
		    print("<li class=\"file ext_" . $item->file_type . "\"><a class='iframe' href='" . $href . "' rel=\"" .
					    $item->guid . "\">" . $item->name . "</a></li>");
	    //~ }
    }
    print("</ul>");

?>
