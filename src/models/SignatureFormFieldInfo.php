<?php
/**
 *  Copyright 2012 GroupDocs.
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
class SignatureFormFieldInfo {

  static $swaggerTypes = array(
      'id' => 'string',
      'formGuid' => 'string',
      'participantGuid' => 'string',
      'name' => 'string',
      'mandatory' => 'bool',
      'regularExpression' => 'string',
      'data' => 'string',
      'fillTimeStamp' => 'string',
      'locations' => 'array[SignatureFormFieldLocationInfo]',
      'fieldType' => 'int',
      'acceptableValues' => 'string',
      'defaultValue' => 'string'

    );

  public $id; // string
  public $formGuid; // string
  public $participantGuid; // string
  public $name; // string
  public $mandatory; // bool
  public $regularExpression; // string
  public $data; // string
  public $fillTimeStamp; // string
  public $locations; // array[SignatureFormFieldLocationInfo]
  public $fieldType; // int
  public $acceptableValues; // string
  public $defaultValue; // string
  }

