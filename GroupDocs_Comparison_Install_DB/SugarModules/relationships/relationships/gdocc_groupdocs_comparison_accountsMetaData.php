<?php
// created: 2012-08-21 21:28:13
$dictionary["gdocc_groupdocs_comparison_accounts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'gdocc_groupdocs_comparison_accounts' => 
    array (
      'lhs_module' => 'gdocc_GroupDocs_Comparison',
      'lhs_table' => 'gdocc_groupdocs_comparison',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gdocc_groupdocs_comparison_accounts_c',
      'join_key_lhs' => 'gdocc_groupdocs_comparison_accounts',
      'join_key_rhs' => 'gdocc_groupdocs_comparison_accountsaccounts_idb',
    ),
  ),
  'table' => 'gdocc_groupdocs_comparison_accounts_c',
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
      'name' => 'gdocc_groupdocs_comparison_accounts',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gdocc_groupdocs_comparison_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gdocc_groupdocs_comparison_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gdocc_groupdocs_comparison_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gdocc_groupdocs_comparison_accounts',
        1 => 'gdocc_groupdocs_comparison_accountsaccounts_idb',
      ),
    ),
  ),
);