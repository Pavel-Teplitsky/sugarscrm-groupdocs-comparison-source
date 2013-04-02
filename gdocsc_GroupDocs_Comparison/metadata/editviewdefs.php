<?php
$module_name = 'gdocsc_GroupDocs_Comparison';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'embed_key',
            'label' => 'LBL_EMBED_KEY',
          ),
          1 => 
          array (
//            'name' => 'api_key',
//            'label' => 'LBL_API_KEY',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'iframe',
            'label' => 'LBL_IFRAME',
          ),
        ),
      ),
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
//            'name' => 'uploadfile',
//            'displayParams' => 
//            array (
//              'onchangeSetFileNameTo' => 'document_name',
//            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'file_id',
            'label' => 'LBL_FILE_ID',
          ),
        ),
      ),
    ),
  ),
);
?>
