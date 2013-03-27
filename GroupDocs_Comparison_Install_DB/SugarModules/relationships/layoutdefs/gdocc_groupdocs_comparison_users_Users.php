<?php
 // created: 2012-08-21 21:28:16
$layout_defs["Users"]["subpanel_setup"]['gdocc_groupdocs_comparison_users'] = array (
  'order' => 100,
  'module' => 'gdocc_GroupDocs',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_GDOCC_GROUPDOCS_COMPARISON_USERS_FROM_GDOCC_GROUPDOCS_COMPARISON_TITLE',
  'get_subpanel_data' => 'gdocc_groupdocs_comparison_users',
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
