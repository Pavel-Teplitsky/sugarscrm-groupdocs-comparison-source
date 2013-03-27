<?php
// created: 2012-08-21 21:28:14
$dictionary["gdocc_groupdocs_comparison_documents"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'gdocc_groupdocs_comparison_documents' => 
    array (
      'lhs_module' => 'gdocc_GroupDocs_Comparison',
      'lhs_table' => 'gdocc_groupdocs_comparison',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gdocc_groupdocs_comparison_documents_c',
      'join_key_lhs' => 'gdocc_groupdocs_comparison_documents_ida',
      'join_key_rhs' => 'gdocc_groupdocs_comparison_documentsdocuments_idb',
    ),
  ),
  'table' => 'gdocc_groupdocs_comparison_documents_c',
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
      'name' => 'gdocc_groupdocs_comparison_documents_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gdocc_groupdocs_comparison_documentsdocuments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gdocc_groupdocs_comparison_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gdocc_groupdocs_comparison_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gdocc_groupdocs_comparison_documents_ida',
        1 => 'gdocc_groupdocs_comparison_documentsdocuments_idb',
      ),
    ),
  ),
);