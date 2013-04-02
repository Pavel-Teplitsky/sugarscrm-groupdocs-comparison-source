<?php
// created: 2012-08-21 21:28:14
$dictionary["gdocsc_groupdocs_comparison_notes"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'gdocsc_groupdocs_comparison_notes' => 
    array (
      'lhs_module' => 'gdocsc_GroupDocs_Comparison',
      'lhs_table' => 'gdocsc_groupdocs_comparison',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gdocsc_groupdocs_comparison_notes_c',
      'join_key_lhs' => 'gdocsc_groupdocs_comparison_notes_comparison_ida',
      'join_key_rhs' => 'gdocsc_groupdocs_comparison_notesnotes_idb',
    ),
  ),
  'table' => 'gdocsc_groupdocs_comparison_notes_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'gdocsc_groupdocs_comparison_notes_comparison_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gdocsc_groupdocs_comparison_notesnotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gdocsc_groupdocs_comparison_notesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gdocsc_groupdocs_comparison_notes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gdocsc_groupdocs_comparison_notes_comparison_ida',
        1 => 'gdocsc_groupdocs_comparison_notesnotes_idb',
      ),
    ),
  ),
);