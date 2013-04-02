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

$relationships = array (
  'gdocsc_groupdocs_comparison_accounts' => 
  array (
    'rhs_label' => 'Accounts',
    'lhs_label' => 'GroupDocs_Comparison',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'gdocsc_GroupDocs_Comparison',
    'rhs_module' => 'Accounts',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'gdocsc_groupdocs_comparison_accounts',
  ),
  'gdocsc_groupdocs_comparison_activities' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'GroupDocs_Comparison',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'gdocsc_GroupDocs_Comparison',
    'rhs_module' => 'Activities',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'gdocsc_groupdocs_comparison_activities',
  ),
  'gdocsc_groupdocs_comparison_contacts' => 
  array (
    'rhs_label' => 'Contacts',
    'lhs_label' => 'GroupDocs_Comparison',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'gdocsc_GroupDocs_Comparison',
    'rhs_module' => 'Contacts',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'gdocsc_groupdocs_comparison_contacts',
  ),
  'gdocsc_groupdocs_comparison_documents' => 
  array (
    'rhs_label' => 'Documents',
    'lhs_label' => 'GroupDocs_Comparison',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'gdocsc_GroupDocs_Comparison',
    'rhs_module' => 'Documents',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'gdocsc_groupdocs_comparison_documents',
  ),
  'gdocsc_groupdocs_comparison_notes' => 
  array (
    'rhs_label' => 'Notes',
    'lhs_label' => 'GroupDocs_Comparison',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'gdocsc_GroupDocs_Comparison',
    'rhs_module' => 'Notes',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'gdocsc_groupdocs_comparison_notes',
  ),
  'gdocsc_groupdocs_comparison_opportunities' => 
  array (
    'rhs_label' => 'Opportunities',
    'lhs_label' => 'GroupDocs_Comparison',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'gdocsc_GroupDocs_Comparison',
    'rhs_module' => 'Opportunities',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'gdocsc_groupdocs_comparison_opportunities',
  ),
  'gdocsc_groupdocs_comparison_project' => 
  array (
    'rhs_label' => 'Projects',
    'lhs_label' => 'GroupDocs_Comparison',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'gdocsc_GroupDocs_Comparison',
    'rhs_module' => 'Project',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'gdocsc_groupdocs_comparison_project',
  ),
  'gdocsc_groupdocs_comparison_tasks' => 
  array (
    'rhs_label' => 'Tasks',
    'lhs_label' => 'GroupDocs_Comparison',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'gdocsc_GroupDocs_Comparison',
    'rhs_module' => 'Tasks',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'gdocsc_groupdocs_comparison_tasks',
  ),
  'gdocsc_groupdocs_comparison_users' => 
  array (
    'rhs_label' => 'Users',
    'lhs_label' => 'GroupDocs_Comparison',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'gdocsc_GroupDocs_Comparison',
    'rhs_module' => 'Users',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'gdocsc_groupdocs_comparison_users',
  ),
);