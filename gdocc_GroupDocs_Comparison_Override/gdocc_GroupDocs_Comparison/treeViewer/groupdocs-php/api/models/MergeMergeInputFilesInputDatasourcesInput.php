<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); 
/**
 *  Copyright 2011 Wordnik, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
 
/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class MergeMergeInputFilesInputDatasourcesInput {

  static $swaggerTypes = array(    
    'userId' => 'string',
    'fileId' => 'string',
    'datasourceId' => 'string',
    'targetType' => 'string',
    'emailResults' => 'string'   
    );


    /**
     * User GUID
     */
	 public $userId;// string


    /**
     * File GUID
     */
	 public $fileId;// string


    /**
     * Datasource id
     */
	 public $datasourceId;// string


    /**
     * Target type
     */
	 public $targetType;// string


    /**
     * Email results
     */
	 public $emailResults;// string


}

?>