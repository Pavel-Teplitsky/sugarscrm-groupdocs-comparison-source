<?php
 // created: 2012-08-21 21:28:15
$layout_defs["gdocc_GroupDocs"]["subpanel_setup"]['gdocc_groupdocs_comparison_project'] = array (
  'order' => 100,
  'module' => 'Project',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_GDOCC_GROUPDOCS_COMPARISON_PROJECT_FROM_PROJECT_TITLE',
  'get_subpanel_data' => 'gdocc_groupdocs_comparison_project',
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
