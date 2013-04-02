<?php
 // created: 2012-08-21 21:28:15
$layout_defs["Contacts"]["subpanel_setup"]['gdocsc_groupdocs_comparison_contacts'] = array (
  'order' => 100,
  'module' => 'gdocsc_GroupDocs_Comparison',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_GDOCSC_GROUPDOCS_COMPARISON_CONTACTS_FROM_GDOCSC_GROUPDOCS_COMPARISON_TITLE',
  'get_subpanel_data' => 'gdocsc_groupdocs_comparison_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
