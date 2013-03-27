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
class AsyncAsyncInputJobsInput {

  static $swaggerTypes = array(    
    'userId' => 'string',
    'pageIndex' => 'string',
    'pageSize' => 'string',
    'actions' => 'string',
    'excludedActions' => 'string',
    'orderBy' => 'string',
    'orderAsc' => 'string'   
    );


    /**
     * User GUID
     */
	 public $userId;// string


    /**
     * Page Index
     */
	 public $pageIndex;// string


    /**
     * Page Size
     */
	 public $pageSize;// string


    /**
     * Actions
     */
	 public $actions;// string


    /**
     * Excluded actions
     */
	 public $excludedActions;// string


    /**
     * Order by
     */
	 public $orderBy;// string


    /**
     * Order asc
     */
	 public $orderAsc;// string


}

?>