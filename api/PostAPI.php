<?php
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
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

class PostAPI {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}


	/**
	 * Rename by post
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param fileId  File GUID
   *  @param newName  New name
   *  
	 * @return RenameResponse {@link RenameResponse} 
	 * @throws APIException 
	 */

	 public function RenameByPost($userId, $fileId, $newName) {

		//parse inputs
		$resourcePath = "/post/file.rename?user_id={userId}&file_id={fileId}&new_name={newName}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $this->apiClient->toPathValue($userId), $resourcePath);
		}
		if($fileId != null) {
			$resourcePath = str_replace("{fileId}", $this->apiClient->toPathValue($fileId), $resourcePath);
		}
		if($newName != null) {
			$resourcePath = str_replace("{newName}", $this->apiClient->toPathValue($newName), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'RenameResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Delete by post
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param fileId  File GUID
   *  
	 * @return DeleteResponse {@link DeleteResponse} 
	 * @throws APIException 
	 */

	 public function DeleteByPost($userId, $fileId) {

		//parse inputs
		$resourcePath = "/post/file.delete?user_id={userId}&file_id={fileId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $this->apiClient->toPathValue($userId), $resourcePath);
		}
		if($fileId != null) {
			$resourcePath = str_replace("{fileId}", $this->apiClient->toPathValue($fileId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'DeleteResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Delete from folder by post
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param path  Path
   *  
	 * @return DeleteResponse {@link DeleteResponse} 
	 * @throws APIException 
	 */

	 public function DeleteFromFolderByPost($userId, $path) {

		//parse inputs
		$resourcePath = "/post/file.delete.in?user_id={userId}&path={path}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $this->apiClient->toPathValue($userId), $resourcePath);
		}
		if($path != null) {
			$resourcePath = str_replace("{path}", $this->apiClient->toPathValue($path), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'DeleteResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Compress by post
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param fileId  File GUID
   *  @param archiveType  Archive Type
   *  
	 * @return CompressResponse {@link CompressResponse} 
	 * @throws APIException 
	 */

	 public function CompressByPost($userId, $fileId, $archiveType) {

		//parse inputs
		$resourcePath = "/post/file.compress?user_id={userId}&file_id={fileId}&archive_type={archiveType}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $this->apiClient->toPathValue($userId), $resourcePath);
		}
		if($fileId != null) {
			$resourcePath = str_replace("{fileId}", $this->apiClient->toPathValue($fileId), $resourcePath);
		}
		if($archiveType != null) {
			$resourcePath = str_replace("{archiveType}", $this->apiClient->toPathValue($archiveType), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CompressResponse');
		return $responseObject;
				
				
	 }



}