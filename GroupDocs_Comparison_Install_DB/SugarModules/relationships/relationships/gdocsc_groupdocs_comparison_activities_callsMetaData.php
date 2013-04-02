<?php
// created: 2012-08-21 21:28:14
$dictionary["gdocsc_groupdocs_comparison_activities_calls"] = array (
  'relationships' => 
  array (
    'gdocsc_groupdocs_comparison_activities_calls' => 
    array (
      'lhs_module' => 'gdocsc_GroupDocs_Comparison',
      'lhs_table' => 'gdocsc_groupdocs_comparison',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'gdocsc_GroupDocs_Comparison',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);