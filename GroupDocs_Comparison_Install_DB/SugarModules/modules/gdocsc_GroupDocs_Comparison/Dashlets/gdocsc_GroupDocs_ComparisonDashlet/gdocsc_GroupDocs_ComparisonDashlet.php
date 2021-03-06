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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/gdocsc_GroupDocs_Comparison/gdocsc_GroupDocs_Comparison.php');

class gdocsc_GroupDocs_ComparisonDashlet extends DashletGeneric { 
     function gdocsc_GroupDocs_ComparisonDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/gdocsc_GroupDocs_Comparison/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) 
			$this->title = translate('LBL_HOMEPAGE_TITLE', 'gdocsc_GroupDocs_Comparison');

        $this->searchFields = $dashletData['gdocsc_GroupDocs_ComparisonDashlet']['searchFields'];
        //$this->columns = $dashletData['gdocsc_GroupDocs_ComparisonDashlet']['columns'];
        $this->seedBean = new gdocsc_GroupDocs_Comparison();
    }

    function display() {

		global $current_user;
 
		$query = "SELECT id, iframe, file_id, embed_key FROM gdocsc_groupdocs_comparison
					WHERE (created_by =".$current_user->id." OR assigned_user_id=".$current_user->id.") AND deleted=0 AND status_id='Active'";
		$result = $GLOBALS['db']->query($query, false);
		$iframe = '';
		$cmsName = 'SugarCRM';
        $pluginVersion = '1.0';
        
		while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
			$iframe.= '<iframe id="groupdocs_signature_iframe" height="400" frameborder="0" width="100%" src="https://apps.groupdocs.com/document-comparison/embed/'.$row['embed_key'].'/'.$row['file_id'].'&referer='.$cmsName.'/'.$pluginVersion.'"></iframe><br>';
		}
		return $iframe;
    }


    /*
     * Returns the HTML for the configure icon
     *
     * @return string HTML
     */
    public function setConfigureIcon()
    {
		global $current_user;
		$additionalTitle = '';
		// Get id for standard Edit link
		$query = "SELECT id, iframe, file_id, embed_key FROM gdocsc_groupdocs_comparison
					WHERE (created_by =".$current_user->id." OR assigned_user_id=".$current_user->id.") AND deleted=0 AND status_id='Active'";
		$result = $GLOBALS['db']->query($query, false);
		$module_id = '';
		$count = 1;
		while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
			$module_id = $row['id'];
			if($this->isConfigurable && $module_id) {
				$additionalTitle.= '<td nowrap width="1%" style="padding-right: 0px;"><div class="dashletToolSet">
				File '.$count++.':<a href="index.php?module=gdocsc_GroupDocs_Comparison&amp;offset=1&amp;&amp;return_module=gdocsc_GroupDocs_Comparison&amp;action=EditView&amp;record='.$module_id.'" id="edit-'.$module_id.'" title="Edit">'
								   . SugarThemeRegistry::current()->getImage('dashlet-header-edit','title="' . translate('LBL_DASHLET_EDIT', 'Home') . '" border="0"  align="absmiddle"', null,null,'.gif',translate('LBL_DASHLET_EDIT', 'Home')).'</a>, '
								   . '';
			}
		}

			if(!$this->isConfigurable) {
				$additionalTitle = '<td nowrap width="1%" style="padding-right: 0px;"><div class="dashletToolSet">';
			}

    	return $additionalTitle;
    }

}