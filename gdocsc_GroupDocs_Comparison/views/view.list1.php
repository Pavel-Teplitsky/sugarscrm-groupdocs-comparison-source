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

/*
require_once('include/MVC/View/views/view.list.php');

class ContactsViewList extends ViewList
{
 	public function preDisplay()
 	{
 		parent::preDisplay();
 		$this->lv->targetList = true;
 	}
}
*/



require_once('include/MVC/View/views/view.html.php');
class gdocsc_GroupDocs_ComparisonViewList extends ViewHtml
{

 	public function preDisplay()
 	{
		parent::preDisplay();


		global $current_user;

		$query = "SELECT g.id, g.assigned_user_id, g.created_by, g.embed_key, g.file_id, t.item_summary AS uname
					FROM gdocsc_groupdocs AS g
					LEFT JOIN tracker as t ON(g.created_by=t.item_id OR g.assigned_user_id=t.item_id)
					WHERE created_by =".$current_user->id." 
					AND assigned_user_id=".$current_user->id;
		$result = $GLOBALS['db']->query($query, false);

		while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
			print '<span style="color:red;font:12pt Arial;font-weight:bold;">Edit:</spam> <a href="index.php?module=gdocsc_GroupDocs_Comparison&amp;offset=1&amp;return_module=gdocsc_GroupDocs_Comparison&amp;action=EditView&amp;record='.$row['id'].'" id="edit-'.$row['id'].'" title="Edit">
			<img border="0" alt="edit" src="themes/Sugar5/images/edit_inline.gif?v=FAEzX2yJymAePlGHy2LtMA" width="13px">
			</a>';
			if($row['assigned_user_id']){
				print '<br>';
				print '<span style="color:black;font:9pt Arial;font-weight:normal;">Assigned to:</span> <span style="color:#990000;font:9pt Arial;font-weight:normal;">'.$row['uname'].'</span>';
				if($row['created_by']) print '<br>';
			}
			if($row['created_by']){
				print '<span style="color:black;font:9pt Arial;font-weight:normal;">Created by: <span style="color:#990000;font:9pt Arial;font-weight:normal;">'.$row['uname'].'</span>';
			}
			print '<br>';
            $cmsName = "SugarCRM";
            $cmsVersion = "1.0";
			print '<iframe id="groupdocs_comparison_iframe" height="300" frameborder="1" width="500" src="https://apps.groupdocs.com/document-comparison/embed/'.$row['embed_key'].'/'.$row['file_id'].'?&referer=' . $cmsName . '/' . $cmsVersion . '"></iframe>';
			print '<br><br>';
			//print(html_entity_decode($row['iframe']));
		}

 		

 	}
}