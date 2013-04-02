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


require_once('include/MVC/View/views/view.detail.php');

class gdocsc_GroupDocs_ComparisonViewDetail extends ViewDetail
{
 	/**
 	 * @see SugarView::display()
	 *
 	 * We are overridding the display method to manipulate the portal information.
 	 * If portal is not enabled then don't show the portal fields.
 	 */
 	public function display()
 	{
        $admin = new Administration();
        $admin->retrieveSettings();

        if(isset($admin->settings['category_id']) && $admin->settings['category_id']) {
           $this->ss->assign("CATEGORY_ENABLED", true);
        }

 		parent::display();
		$rec = stripslashes(strip_tags($_GET['record']));
		
		// Show this Doc
		global $current_user;

		$query = "SELECT * FROM gdocsc_groupdocs_comparison WHERE id ='".$rec."' AND file_id!=''";
		$result = $GLOBALS['db']->query($query, false);
        $cmsName = 'SugarCRM';
        $pluginVersion = '1.0';
        
		while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
			print '<iframe id="groupdocs_comparison_iframe" height="950" frameborder="0" width="800" src="https://apps.groupdocs.com/document-comparison/embed/'.$row['embed_key'].'/'.$row['file_id'].'&referer='.$cmsName.'/'.$pluginVersion.'"></iframe>';
			print '<br>';
		}

		//print(html_entity_decode($row['iframe']));// if tags saved in db
 	}
}
