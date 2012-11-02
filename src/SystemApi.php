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
class SystemApi {

	private $basePath = "https://api.groupdocs.com/v2.0";

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

    public function setBasePath($basePath) {
	  $this->basePath = $basePath;
	}
	  
	public function getBasePath() {
	  $this->basePath;
	}

  /**
	 * GetUserPlan
	 * Get user plan
   * callerId, string: User GUID (required)
   * @return GetPlanResponse
	 */

   public function GetUserPlan($callerId) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/system/{callerId}/plan");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($callerId != null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetPlanResponse');
  		return $responseObject;

      }
  /**
	 * GetUserSubscriptionPlan
	 * Get user plan
   * callerId, string: User GUID (required)
   * @return GetUserSubscriptionPlanResponse
	 */

   public function GetUserSubscriptionPlan($callerId) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/system/{callerId}/subscription");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($callerId != null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetUserSubscriptionPlanResponse');
  		return $responseObject;

      }
  /**
	 * GetSubscriptionPlans
	 * Get subscription plans
   * callerId, string: User GUID (required)
   * family, string: Product Family Name (required)
   * @return GetSubscriptionPlansResponse
	 */

   public function GetSubscriptionPlans($callerId, $family) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/system/{callerId}/plans/{family}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($callerId != null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
  		}
  		if($family != null) {
  			$resourcePath = str_replace("{" . "family" . "}",
  			                            $family, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetSubscriptionPlansResponse');
  		return $responseObject;

      }
  /**
	 * SetSubscriptionPlan
	 * Set subscription plan user plan
   * userId, string: User GUID (required)
   * productId, string: Product ID (required)
   * body, SubscriptionPlanInfo: Subscription Plan (required)
   * @return SetUserSubscriptionPlanResponse
	 */

   public function SetSubscriptionPlan($userId, $productId, $body) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/system/{userId}/subscriptions/{productId}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($productId != null) {
  			$resourcePath = str_replace("{" . "productId" . "}",
  			                            $productId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'SetUserSubscriptionPlanResponse');
  		return $responseObject;

      }
  /**
	 * GetCountries
	 * Get countries
   * callerId, string: User GUID (required)
   * @return GetCountriesResponse
	 */

   public function GetCountries($callerId) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/system/{callerId}/countries");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($callerId != null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetCountriesResponse');
  		return $responseObject;

      }
  /**
	 * GetStates
	 * Get states
   * callerId, string: User GUID (required)
   * countryName, string: Country Name (required)
   * @return GetStatesResponse
	 */

   public function GetStates($callerId, $countryName) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/system/{callerId}/countries/{countryName}/states");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($callerId != null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
  		}
  		if($countryName != null) {
  			$resourcePath = str_replace("{" . "countryName" . "}",
  			                            $countryName, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetStatesResponse');
  		return $responseObject;

      }
  
}

