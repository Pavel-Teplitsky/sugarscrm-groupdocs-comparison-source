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


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'gdocsc',
  'author' => 'GRoupDocs',
  'description' => 'GroupDocs API',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'GroupDocs_Comparison',
  'published_date' => '2013-01-12 18:28:07',
  'type' => 'module',
  'version' => 1345573688,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'GroupDocs_Comparison',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'gdocsc_GroupDocs_Comparison',
      'class' => 'gdocsc_GroupDocs_Comparison',
      'path' => 'modules/gdocsc_GroupDocs_Comparison/gdocsc_GroupDocs_Comparison.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_accounts_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_activities_calls_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_contacts_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_documents_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_notes_Notes.php',
      'to_module' => 'Notes',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_notes_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_opportunities_Opportunities.php',
      'to_module' => 'Opportunities',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_opportunities_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_project_Project.php',
      'to_module' => 'Project',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_project_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_tasks_Tasks.php',
      'to_module' => 'Tasks',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_tasks_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_users_Users.php',
      'to_module' => 'Users',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gdocsc_groupdocs_comparison_users_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_accountsMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_activities_callsMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_activities_meetingsMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_activities_notesMetaData.php',
    ),
    4 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_activities_tasksMetaData.php',
    ),
    5 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_activities_emailsMetaData.php',
    ),
    6 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_contactsMetaData.php',
    ),
    7 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_documentsMetaData.php',
    ),
    8 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_notesMetaData.php',
    ),
    9 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_opportunitiesMetaData.php',
    ),
    10 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_projectMetaData.php',
    ),
    11 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_tasksMetaData.php',
    ),
    12 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gdocsc_groupdocs_comparison_usersMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/gdocsc_GroupDocs_Comparison',
      'to' => 'modules/gdocsc_GroupDocs_Comparison',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/application.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Notes.php',
      'to_module' => 'Notes',
      'language' => 'en_us',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Opportunities.php',
      'to_module' => 'Opportunities',
      'language' => 'en_us',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Project.php',
      'to_module' => 'Project',
      'language' => 'en_us',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'en_us',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'en_us',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
      'language' => 'en_us',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_accounts_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_activities_calls_Calls.php',
      'to_module' => 'Calls',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_activities_calls_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_activities_meetings_Meetings.php',
      'to_module' => 'Meetings',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_activities_meetings_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_activities_notes_Notes.php',
      'to_module' => 'Notes',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_activities_notes_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_activities_tasks_Tasks.php',
      'to_module' => 'Tasks',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_activities_tasks_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_activities_emails_Emails.php',
      'to_module' => 'Emails',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_activities_emails_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_contacts_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_documents_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_notes_Notes.php',
      'to_module' => 'Notes',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_notes_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_opportunities_Opportunities.php',
      'to_module' => 'Opportunities',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_opportunities_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_project_Project.php',
      'to_module' => 'Project',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_project_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_tasks_Tasks.php',
      'to_module' => 'Tasks',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_tasks_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_users_Users.php',
      'to_module' => 'Users',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gdocsc_groupdocs_comparison_users_gdocsc_GroupDocs_Comparison.php',
      'to_module' => 'gdocsc_GroupDocs_Comparison',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        'Calls' => 'gdocsc_groupdocs_comparison_activities_calls_name',
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
        'Meetings' => 'gdocsc_groupdocs_comparison_activities_meetings_name',
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
        'Notes' => 'gdocsc_groupdocs_comparison_activities_notes_name',
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
        'Tasks' => 'gdocsc_groupdocs_comparison_activities_tasks_name',
      ),
    ),
    4 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);