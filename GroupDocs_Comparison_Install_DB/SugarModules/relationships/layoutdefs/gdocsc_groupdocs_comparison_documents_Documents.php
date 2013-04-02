<?php
 // created: 2012-08-21 21:28:15
$layout_defs["Documents"]["subpanel_setup"]['gdocsc_groupdocs_comparison_documents'] = array (
  'order' => 100,
  'module' => 'gdocsc_GroupDocs_Comparison',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_GDOCSC_GROUPDOCS_COMPARISON_DOCUMENTS_FROM_GDOCSC_GROUPDOCS_COMPARISON_TITLE',
  'get_subpanel_data' => 'gdocsc_groupdocs_comparison_documents',
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
