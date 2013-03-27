<?php
// created: 2012-08-21 21:28:14
$dictionary["gdocc_groupdocs_comparison_activities_notes"] = array (
  'relationships' => 
  array (
    'gdocc_groupdocs_comparison_activities_notes' => 
    array (
      'lhs_module' => 'gdocc_GroupDocs_Comparison',
      'lhs_table' => 'gdocc_groupdocs_comparison',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'gdocc_GroupDocs_Comparison',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);