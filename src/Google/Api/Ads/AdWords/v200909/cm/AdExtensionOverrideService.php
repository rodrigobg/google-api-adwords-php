<?php
/**
 * Contains all client objects for the AdExtensionOverrideService service.
 *
 * PHP version 5
 *
 * Copyright 2009, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage ${service.version}
 * @category   WebServices
 * @copyright  2009, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author     Adam Rogal <api.arogal@gmail.com>
 */

require_once dirname(__FILE__) . "/../../Lib/AdWordsSoapClient.php";

if (!class_exists("Address")) {
/**
 * <span class="constraint StringLength">This string must not be empty.</span>
 */
class Address {
	/**
	 * @access public
	 * @var string
	 */
	public $streetAddress;
	/**
	 * @access public
	 * @var string
	 */
	public $streetAddress2;
	/**
	 * @access public
	 * @var string
	 */
	public $cityName;
	/**
	 * @access public
	 * @var string
	 */
	public $provinceCode;
	/**
	 * @access public
	 * @var string
	 */
	public $provinceName;
	/**
	 * @access public
	 * @var string
	 */
	public $postalCode;
	/**
	 * @access public
	 * @var string
	 */
	public $countryCode;

	public function __construct($streetAddress = NULL, $streetAddress2 = NULL, $cityName = NULL, $provinceCode = NULL, $provinceName = NULL, $postalCode = NULL, $countryCode = NULL) {
		if(get_parent_class('Address')) parent::__construct();
		$this->streetAddress = $streetAddress;
		$this->streetAddress2 = $streetAddress2;
		$this->cityName = $cityName;
		$this->provinceCode = $provinceCode;
		$this->provinceName = $provinceName;
		$this->postalCode = $postalCode;
		$this->countryCode = $countryCode;
	}
}}

if (!class_exists("GeoPoint")) {
/**
 * Specifies a geo location with the supplied lat/long.
 */
class GeoPoint {
	/**
	 * @access public
	 * @var integer
	 */
	public $latitudeInMicroDegrees;
	/**
	 * @access public
	 * @var integer
	 */
	public $longitudeInMicroDegrees;

	public function __construct($latitudeInMicroDegrees = NULL, $longitudeInMicroDegrees = NULL) {
		if(get_parent_class('GeoPoint')) parent::__construct();
		$this->latitudeInMicroDegrees = $latitudeInMicroDegrees;
		$this->longitudeInMicroDegrees = $longitudeInMicroDegrees;
	}
}}

if (!class_exists("LocationOverrideInfo")) {
/**
 * Represents override info for ad level LocationExtension overrides.
 */
class LocationOverrideInfo {
	/**
	 * @access public
	 * @var integer
	 */
	public $radius;
	/**
	 * @access public
	 * @var tnsLocationOverrideInfoRadiusUnits
	 */
	public $radiusUnits;

	public function __construct($radius = NULL, $radiusUnits = NULL) {
		if(get_parent_class('LocationOverrideInfo')) parent::__construct();
		$this->radius = $radius;
		$this->radiusUnits = $radiusUnits;
	}
}}

if (!class_exists("OverrideInfo")) {
/**
 * Represents additional override info with which to augment the override
 * extension.
 */
class OverrideInfo {
	/**
	 * @access public
	 * @var LocationOverrideInfo
	 */
	public $LocationOverrideInfo;

	public function __construct($LocationOverrideInfo = NULL) {
		if(get_parent_class('OverrideInfo')) parent::__construct();
		$this->LocationOverrideInfo = $LocationOverrideInfo;
	}
}}

if (!class_exists("Paging")) {
/**
 * Specifies what kind of paging wanted for the result of a get.
 */
class Paging {
	/**
	 * @access public
	 * @var integer
	 */
	public $startIndex;
	/**
	 * @access public
	 * @var integer
	 */
	public $numberResults;

	public function __construct($startIndex = NULL, $numberResults = NULL) {
		if(get_parent_class('Paging')) parent::__construct();
		$this->startIndex = $startIndex;
		$this->numberResults = $numberResults;
	}
}}

if (!class_exists("SoapRequestHeader")) {
/**
 * Defines the required and optional elements within the header of a SOAP request.
 */
class SoapRequestHeader {
	/**
	 * @access public
	 * @var string
	 */
	public $applicationToken;
	/**
	 * @access public
	 * @var string
	 */
	public $authToken;
	/**
	 * @access public
	 * @var string
	 */
	public $clientCustomerId;
	/**
	 * @access public
	 * @var string
	 */
	public $clientEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $developerToken;
	/**
	 * @access public
	 * @var string
	 */
	public $userAgent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $validateOnly;

	public function __construct($applicationToken = NULL, $authToken = NULL, $clientCustomerId = NULL, $clientEmail = NULL, $developerToken = NULL, $userAgent = NULL, $validateOnly = NULL) {
		if(get_parent_class('SoapRequestHeader')) parent::__construct();
		$this->applicationToken = $applicationToken;
		$this->authToken = $authToken;
		$this->clientCustomerId = $clientCustomerId;
		$this->clientEmail = $clientEmail;
		$this->developerToken = $developerToken;
		$this->userAgent = $userAgent;
		$this->validateOnly = $validateOnly;
	}
}}

if (!class_exists("SoapResponseHeader")) {
/**
 * Defines the elements within the header of a SOAP response.
 */
class SoapResponseHeader {
	/**
	 * @access public
	 * @var string
	 */
	public $requestId;
	/**
	 * @access public
	 * @var integer
	 */
	public $operations;
	/**
	 * @access public
	 * @var integer
	 */
	public $responseTime;
	/**
	 * @access public
	 * @var integer
	 */
	public $units;

	public function __construct($requestId = NULL, $operations = NULL, $responseTime = NULL, $units = NULL) {
		if(get_parent_class('SoapResponseHeader')) parent::__construct();
		$this->requestId = $requestId;
		$this->operations = $operations;
		$this->responseTime = $responseTime;
		$this->units = $units;
	}
}}

if (!class_exists("AdExtension")) {
/**
 * Base class for AdExtension objects. An AdExtension is an extension to
 * an existing ad or metadata that will process into an extension.
 * The class is concrete, so ad extensions can be added/removed to campaigns
 * by referring to the id.
 */
class AdExtension {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var string
	 */
	public $AdExtensionType;
	private $_parameterMap = array (
		"AdExtension.Type" => "AdExtensionType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	 */
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

	public function __construct($id = NULL, $AdExtensionType = NULL) {
		if(get_parent_class('AdExtension')) parent::__construct();
		$this->id = $id;
		$this->AdExtensionType = $AdExtensionType;
	}
}}

if (!class_exists("AdExtensionOverrideSelector")) {
/**
 * Specifies criteria for selecting a set of AdExtensionOverrides.
 */
class AdExtensionOverrideSelector {
	/**
	 * @access public
	 * @var integer[]
	 */
	public $campaignIds;
	/**
	 * @access public
	 * @var integer[]
	 */
	public $adIds;
	/**
	 * @access public
	 * @var integer[]
	 */
	public $adExtensionIds;
	/**
	 * @access public
	 * @var tnsAdExtensionOverrideStatus[]
	 */
	public $statuses;
	/**
	 * @access public
	 * @var Paging
	 */
	public $paging;

	public function __construct($campaignIds = NULL, $adIds = NULL, $adExtensionIds = NULL, $statuses = NULL, $paging = NULL) {
		if(get_parent_class('AdExtensionOverrideSelector')) parent::__construct();
		$this->campaignIds = $campaignIds;
		$this->adIds = $adIds;
		$this->adExtensionIds = $adExtensionIds;
		$this->statuses = $statuses;
		$this->paging = $paging;
	}
}}

if (!class_exists("ComparableValue")) {
/**
 * Comparable types for constructing ranges with.
 */
class ComparableValue {
	/**
	 * @access public
	 * @var string
	 */
	public $ComparableValueType;
	private $_parameterMap = array (
		"ComparableValue.Type" => "ComparableValueType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	 */
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

	public function __construct($ComparableValueType = NULL) {
		if(get_parent_class('ComparableValue')) parent::__construct();
		$this->ComparableValueType = $ComparableValueType;
	}
}}

if (!class_exists("Stats")) {
/**
 * Statistics about an ad or criterion within an adgroup or campaign.
 */
class Stats {
	/**
	 * @access public
	 * @var string
	 */
	public $startDate;
	/**
	 * @access public
	 * @var string
	 */
	public $endDate;
	/**
	 * @access public
	 * @var tnsStatsNetwork
	 */
	public $network;
	/**
	 * @access public
	 * @var integer
	 */
	public $clicks;
	/**
	 * @access public
	 * @var integer
	 */
	public $impressions;
	/**
	 * @access public
	 * @var Money
	 */
	public $cost;
	/**
	 * @access public
	 * @var double
	 */
	public $averagePosition;
	/**
	 * @access public
	 * @var Money
	 */
	public $averageCpc;
	/**
	 * @access public
	 * @var Money
	 */
	public $averageCpm;
	/**
	 * @access public
	 * @var double
	 */
	public $ctr;
	/**
	 * @access public
	 * @var integer
	 */
	public $conversions;
	/**
	 * @access public
	 * @var double
	 */
	public $conversionRate;
	/**
	 * @access public
	 * @var Money
	 */
	public $costPerConversion;
	/**
	 * @access public
	 * @var integer
	 */
	public $conversionsManyPerClick;
	/**
	 * @access public
	 * @var double
	 */
	public $conversionRateManyPerClick;
	/**
	 * @access public
	 * @var Money
	 */
	public $costPerConversionManyPerClick;
	/**
	 * @access public
	 * @var string
	 */
	public $StatsType;
	private $_parameterMap = array (
		"Stats.Type" => "StatsType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	 */
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

	public function __construct($startDate = NULL, $endDate = NULL, $network = NULL, $clicks = NULL, $impressions = NULL, $cost = NULL, $averagePosition = NULL, $averageCpc = NULL, $averageCpm = NULL, $ctr = NULL, $conversions = NULL, $conversionRate = NULL, $costPerConversion = NULL, $conversionsManyPerClick = NULL, $conversionRateManyPerClick = NULL, $costPerConversionManyPerClick = NULL, $StatsType = NULL) {
		if(get_parent_class('Stats')) parent::__construct();
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->network = $network;
		$this->clicks = $clicks;
		$this->impressions = $impressions;
		$this->cost = $cost;
		$this->averagePosition = $averagePosition;
		$this->averageCpc = $averageCpc;
		$this->averageCpm = $averageCpm;
		$this->ctr = $ctr;
		$this->conversions = $conversions;
		$this->conversionRate = $conversionRate;
		$this->costPerConversion = $costPerConversion;
		$this->conversionsManyPerClick = $conversionsManyPerClick;
		$this->conversionRateManyPerClick = $conversionRateManyPerClick;
		$this->costPerConversionManyPerClick = $costPerConversionManyPerClick;
		$this->StatsType = $StatsType;
	}
}}

if (!class_exists("AdExtensionOverride")) {
/**
 * Represents an ad level ad extension override. An ad extension override
 * specifies the ad extension that must be used if the ad is served with
 * any ad extension data.
 */
class AdExtensionOverride {
	/**
	 * @access public
	 * @var integer
	 */
	public $adId;
	/**
	 * @access public
	 * @var AdExtension
	 */
	public $adExtension;
	/**
	 * @access public
	 * @var OverrideInfo
	 */
	public $overrideInfo;
	/**
	 * @access public
	 * @var tnsAdExtensionOverrideStatus
	 */
	public $status;
	/**
	 * @access public
	 * @var tnsAdExtensionOverrideApprovalStatus
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var AdExtensionOverrideStats
	 */
	public $stats;

	public function __construct($adId = NULL, $adExtension = NULL, $overrideInfo = NULL, $status = NULL, $approvalStatus = NULL, $stats = NULL) {
		if(get_parent_class('AdExtensionOverride')) parent::__construct();
		$this->adId = $adId;
		$this->adExtension = $adExtension;
		$this->overrideInfo = $overrideInfo;
		$this->status = $status;
		$this->approvalStatus = $approvalStatus;
		$this->stats = $stats;
	}
}}

if (!class_exists("ApiError")) {
/**
 * A service api error base class that provides error details.
 * 1) the OGNL field path is provided for parsers.
 * 2) the OGNL field path with debug comments easily helps track causes.
 */
class ApiError {
	/**
	 * @access public
	 * @var string
	 */
	public $fieldPath;
	/**
	 * @access public
	 * @var string
	 */
	public $trigger;
	/**
	 * @access public
	 * @var string
	 */
	public $ApiErrorType;
	private $_parameterMap = array (
		"ApiError.Type" => "ApiErrorType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	 */
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

	public function __construct($fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('ApiError')) parent::__construct();
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("ApplicationException")) {
/**
 * Base class for exceptions.
 */
class ApplicationException {
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var string
	 */
	public $ApplicationExceptionType;
	private $_parameterMap = array (
		"ApplicationException.Type" => "ApplicationExceptionType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	 */
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

	public function __construct($message = NULL, $ApplicationExceptionType = NULL) {
		if(get_parent_class('ApplicationException')) parent::__construct();
		$this->message = $message;
		$this->ApplicationExceptionType = $ApplicationExceptionType;
	}
}}

if (!class_exists("ListReturnValue")) {
/**
 * Base list return value type.
 */
class ListReturnValue {
	/**
	 * @access public
	 * @var string
	 */
	public $ListReturnValueType;
	private $_parameterMap = array (
		"ListReturnValue.Type" => "ListReturnValueType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	 */
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

	public function __construct($ListReturnValueType = NULL) {
		if(get_parent_class('ListReturnValue')) parent::__construct();
		$this->ListReturnValueType = $ListReturnValueType;
	}
}}

if (!class_exists("Operation")) {
/**
 * This represents an operation that includes an operator and an operand
 * specified type.
 */
class Operation {
	/**
	 * @access public
	 * @var tnsOperator
	 */
	public $operator;
	/**
	 * @access public
	 * @var string
	 */
	public $OperationType;
	private $_parameterMap = array (
		"Operation.Type" => "OperationType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	 */
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

	public function __construct($operator = NULL, $OperationType = NULL) {
		if(get_parent_class('Operation')) parent::__construct();
		$this->operator = $operator;
		$this->OperationType = $OperationType;
	}
}}

if (!class_exists("Page")) {
/**
 * Contains the results from a get call.
 */
class Page {
	/**
	 * @access public
	 * @var integer
	 */
	public $totalNumEntries;
	/**
	 * @access public
	 * @var string
	 */
	public $PageType;
	private $_parameterMap = array (
		"Page.Type" => "PageType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	 */
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

	public function __construct($totalNumEntries = NULL, $PageType = NULL) {
		if(get_parent_class('Page')) parent::__construct();
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}}

if (!class_exists("AdExtensionOverrideApprovalStatus")) {
/**
 * Approval status for the AdExtensionOverride
 */
class AdExtensionOverrideApprovalStatus {

	public function __construct() {
		if(get_parent_class('AdExtensionOverrideApprovalStatus')) parent::__construct();
	}
}}

if (!class_exists("AdExtensionOverrideStatus")) {
/**
 * Status of the AdExtensionOverride
 */
class AdExtensionOverrideStatus {

	public function __construct() {
		if(get_parent_class('AdExtensionOverrideStatus')) parent::__construct();
	}
}}

if (!class_exists("AdExtensionOverrideErrorReason")) {
/**
 * Cannot override an ad that is already overriden with an adextension
 */
class AdExtensionOverrideErrorReason {

	public function __construct() {
		if(get_parent_class('AdExtensionOverrideErrorReason')) parent::__construct();
	}
}}

if (!class_exists("AuthenticationErrorReason")) {
/**
 * The single reason for the authentication failure.
 */
class AuthenticationErrorReason {

	public function __construct() {
		if(get_parent_class('AuthenticationErrorReason')) parent::__construct();
	}
}}

if (!class_exists("AuthorizationErrorReason")) {
/**
 * The reasons for the database error.
 */
class AuthorizationErrorReason {

	public function __construct() {
		if(get_parent_class('AuthorizationErrorReason')) parent::__construct();
	}
}}

if (!class_exists("ClientTermsErrorReason")) {
/**
 * Enums for the various reasons an error can be thrown as a result of
 * ClientTerms violation.
 */
class ClientTermsErrorReason {

	public function __construct() {
		if(get_parent_class('ClientTermsErrorReason')) parent::__construct();
	}
}}

if (!class_exists("DistinctErrorReason")) {
/**
 * The reasons for the validation error.
 */
class DistinctErrorReason {

	public function __construct() {
		if(get_parent_class('DistinctErrorReason')) parent::__construct();
	}
}}

if (!class_exists("InternalApiErrorReason")) {
/**
 * The single reason for the internal API error.
 */
class InternalApiErrorReason {

	public function __construct() {
		if(get_parent_class('InternalApiErrorReason')) parent::__construct();
	}
}}

if (!class_exists("LocationExtensionSource")) {
/**
 * From manual entry in adwords frontend
 */
class LocationExtensionSource {

	public function __construct() {
		if(get_parent_class('LocationExtensionSource')) parent::__construct();
	}
}}

if (!class_exists("LocationOverrideInfoRadiusUnits")) {
/**
 * Radius units
 */
class LocationOverrideInfoRadiusUnits {

	public function __construct() {
		if(get_parent_class('LocationOverrideInfoRadiusUnits')) parent::__construct();
	}
}}

if (!class_exists("NotEmptyErrorReason")) {
/**
 * The reasons for the validation error.
 */
class NotEmptyErrorReason {

	public function __construct() {
		if(get_parent_class('NotEmptyErrorReason')) parent::__construct();
	}
}}

if (!class_exists("NotWhitelistedErrorReason")) {
/**
 * The single reason for the whitelist error.
 */
class NotWhitelistedErrorReason {

	public function __construct() {
		if(get_parent_class('NotWhitelistedErrorReason')) parent::__construct();
	}
}}

if (!class_exists("NullErrorReason")) {
/**
 * The reasons for the validation error.
 */
class NullErrorReason {

	public function __construct() {
		if(get_parent_class('NullErrorReason')) parent::__construct();
	}
}}

if (!class_exists("Operator")) {
/**
 * This represents an operator that may be presented to an adsapi service.
 */
class Operator {

	public function __construct() {
		if(get_parent_class('Operator')) parent::__construct();
	}
}}

if (!class_exists("QuotaCheckErrorReason")) {
/**
 * Enums for all the reasons an error can be thrown to the user during
 * billing quota checks.
 */
class QuotaCheckErrorReason {

	public function __construct() {
		if(get_parent_class('QuotaCheckErrorReason')) parent::__construct();
	}
}}

if (!class_exists("QuotaExceededErrorReason")) {
/**
 * The single reason for the quota error.
 */
class QuotaExceededErrorReason {

	public function __construct() {
		if(get_parent_class('QuotaExceededErrorReason')) parent::__construct();
	}
}}

if (!class_exists("ReadOnlyErrorReason")) {
/**
 * The reasons for the target error.
 */
class ReadOnlyErrorReason {

	public function __construct() {
		if(get_parent_class('ReadOnlyErrorReason')) parent::__construct();
	}
}}

if (!class_exists("RequiredErrorReason")) {
/**
 * The reasons for the target error.
 */
class RequiredErrorReason {

	public function __construct() {
		if(get_parent_class('RequiredErrorReason')) parent::__construct();
	}
}}

if (!class_exists("SizeLimitErrorReason")) {
/**
 * The reasons for Ad Scheduling errors.
 */
class SizeLimitErrorReason {

	public function __construct() {
		if(get_parent_class('SizeLimitErrorReason')) parent::__construct();
	}
}}

if (!class_exists("StatsNetwork")) {
/**
 * Ad network.
 */
class StatsNetwork {

	public function __construct() {
		if(get_parent_class('StatsNetwork')) parent::__construct();
	}
}}

if (!class_exists("AdExtensionOverrideServiceGet")) {
/**
 * Returns a list of AdExtensionOverrides based on an
 * AdExtensionOverrideSelector.
 * @param selector the selector specifying the query
 * @return the page containing the AdExtensionOverride which meet the
 * criteria specified by the selector
 */
class AdExtensionOverrideServiceGet {
	/**
	 * @access public
	 * @var AdExtensionOverrideSelector
	 */
	public $selector;

	public function __construct($selector = NULL) {
		if(get_parent_class('AdExtensionOverrideServiceGet')) parent::__construct();
		$this->selector = $selector;
	}
}}

if (!class_exists("AdExtensionOverrideServiceGetResponse")) {
/**
 * 
 */
class AdExtensionOverrideServiceGetResponse {
	/**
	 * @access public
	 * @var AdExtensionOverridePage
	 */
	public $rval;

	public function __construct($rval = NULL) {
		if(get_parent_class('AdExtensionOverrideServiceGetResponse')) parent::__construct();
		$this->rval = $rval;
	}
}}

if (!class_exists("AdExtensionOverrideServiceMutate")) {
/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SuppoprtedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
 * 
 * 
 * 
 * Applies the list of mutate operations.
 * Conditions for adding an ad-level AdExtension override using an AdExtension
 * under the Ad's campaign:
 * 1) If the text ad has never been overridden, an AdExtension override may
 * be set on the creative using an extension under the campaign, along with
 * any override info.
 * 2) If the text ad has been overriden before, the latitude/longitude of the
 * new extension override must be the same as the previous override and
 * no override info can be specified (ie. the override info will inherit from
 * the previous override info).
 * @param operations the operations to apply. The same ad extension override
 * cannot be specified in more than one operation.
 * @return the applied ad extension overrides
 */
class AdExtensionOverrideServiceMutate {
	/**
	 * @access public
	 * @var AdExtensionOverrideOperation[]
	 */
	public $operations;

	public function __construct($operations = NULL) {
		if(get_parent_class('AdExtensionOverrideServiceMutate')) parent::__construct();
		$this->operations = $operations;
	}
}}

if (!class_exists("AdExtensionOverrideServiceMutateResponse")) {
/**
 * 
 */
class AdExtensionOverrideServiceMutateResponse {
	/**
	 * @access public
	 * @var AdExtensionOverrideReturnValue
	 */
	public $rval;

	public function __construct($rval = NULL) {
		if(get_parent_class('AdExtensionOverrideServiceMutateResponse')) parent::__construct();
		$this->rval = $rval;
	}
}}

if (!class_exists("AdExtensionOverrideError")) {
/**
 * AdExtensionOverride errors.
 */
class AdExtensionOverrideError extends ApiError {
	/**
	 * @access public
	 * @var tnsAdExtensionOverrideErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('AdExtensionOverrideError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("AdExtensionOverrideStats")) {
/**
 * Represents stats specific to AdExtensionOverrides.
 */
class AdExtensionOverrideStats extends Stats {

	public function __construct($startDate = NULL, $endDate = NULL, $network = NULL, $clicks = NULL, $impressions = NULL, $cost = NULL, $averagePosition = NULL, $averageCpc = NULL, $averageCpm = NULL, $ctr = NULL, $conversions = NULL, $conversionRate = NULL, $costPerConversion = NULL, $conversionsManyPerClick = NULL, $conversionRateManyPerClick = NULL, $costPerConversionManyPerClick = NULL, $StatsType = NULL) {
		if(get_parent_class('AdExtensionOverrideStats')) parent::__construct();
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->network = $network;
		$this->clicks = $clicks;
		$this->impressions = $impressions;
		$this->cost = $cost;
		$this->averagePosition = $averagePosition;
		$this->averageCpc = $averageCpc;
		$this->averageCpm = $averageCpm;
		$this->ctr = $ctr;
		$this->conversions = $conversions;
		$this->conversionRate = $conversionRate;
		$this->costPerConversion = $costPerConversion;
		$this->conversionsManyPerClick = $conversionsManyPerClick;
		$this->conversionRateManyPerClick = $conversionRateManyPerClick;
		$this->costPerConversionManyPerClick = $costPerConversionManyPerClick;
		$this->StatsType = $StatsType;
	}
}}

if (!class_exists("AuthenticationError")) {
/**
 * 
 */
class AuthenticationError extends ApiError {
	/**
	 * @access public
	 * @var tnsAuthenticationErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('AuthenticationError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("AuthorizationError")) {
/**
 * 
 */
class AuthorizationError extends ApiError {
	/**
	 * @access public
	 * @var tnsAuthorizationErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('AuthorizationError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("ClientTermsError")) {
/**
 * Encapsulates the errors thrown during client terms checks for adwords.
 */
class ClientTermsError extends ApiError {
	/**
	 * @access public
	 * @var tnsClientTermsErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('ClientTermsError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("DistinctError")) {
/**
 * Errors related to distinct ids or content.
 */
class DistinctError extends ApiError {
	/**
	 * @access public
	 * @var tnsDistinctErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('DistinctError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("InternalApiError")) {
/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 */
class InternalApiError extends ApiError {
	/**
	 * @access public
	 * @var tnsInternalApiErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('InternalApiError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("LocationExtension")) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 */
class LocationExtension extends AdExtension {
	/**
	 * @access public
	 * @var Address
	 */
	public $address;
	/**
	 * @access public
	 * @var GeoPoint
	 */
	public $geoPoint;
	/**
	 * @access public
	 * @var base64Binary
	 */
	public $encodedLocation;
	/**
	 * @access public
	 * @var string
	 */
	public $companyName;
	/**
	 * @access public
	 * @var string
	 */
	public $phoneNumber;
	/**
	 * @access public
	 * @var tnsLocationExtensionSource
	 */
	public $source;
	/**
	 * @access public
	 * @var integer
	 */
	public $iconMediaId;
	/**
	 * @access public
	 * @var integer
	 */
	public $imageMediaId;

	public function __construct($address = NULL, $geoPoint = NULL, $encodedLocation = NULL, $companyName = NULL, $phoneNumber = NULL, $source = NULL, $iconMediaId = NULL, $imageMediaId = NULL, $id = NULL, $AdExtensionType = NULL) {
		if(get_parent_class('LocationExtension')) parent::__construct();
		$this->address = $address;
		$this->geoPoint = $geoPoint;
		$this->encodedLocation = $encodedLocation;
		$this->companyName = $companyName;
		$this->phoneNumber = $phoneNumber;
		$this->source = $source;
		$this->iconMediaId = $iconMediaId;
		$this->imageMediaId = $imageMediaId;
		$this->id = $id;
		$this->AdExtensionType = $AdExtensionType;
	}
}}

if (!class_exists("Money")) {
/**
 * 
 */
class Money extends ComparableValue {
	/**
	 * @access public
	 * @var integer
	 */
	public $microAmount;

	public function __construct($microAmount = NULL, $ComparableValueType = NULL) {
		if(get_parent_class('Money')) parent::__construct();
		$this->microAmount = $microAmount;
		$this->ComparableValueType = $ComparableValueType;
	}
}}

if (!class_exists("NotEmptyError")) {
/**
 * A list of all errors associated with the @NotEmpty constraints.
 */
class NotEmptyError extends ApiError {
	/**
	 * @access public
	 * @var tnsNotEmptyErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('NotEmptyError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("NotWhitelistedError")) {
/**
 * Indicates that the customer is not whitelisted for accessing the API.
 */
class NotWhitelistedError extends ApiError {
	/**
	 * @access public
	 * @var tnsNotWhitelistedErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('NotWhitelistedError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("NullError")) {
/**
 * Errors associated with contents not null constraint.
 */
class NullError extends ApiError {
	/**
	 * @access public
	 * @var tnsNullErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('NullError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("NumberValue")) {
/**
 * Number value types for constructing number valued ranges.
 */
class NumberValue extends ComparableValue {

	public function __construct($ComparableValueType = NULL) {
		if(get_parent_class('NumberValue')) parent::__construct();
		$this->ComparableValueType = $ComparableValueType;
	}
}}

if (!class_exists("QuotaCheckError")) {
/**
 * Encapsulates the errors thrown during developer quota checks for webapi
 * calls.
 */
class QuotaCheckError extends ApiError {
	/**
	 * @access public
	 * @var tnsQuotaCheckErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('QuotaCheckError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("QuotaExceededError")) {
/**
 * 
 */
class QuotaExceededError extends ApiError {
	/**
	 * @access public
	 * @var tnsQuotaExceededErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('QuotaExceededError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("ReadOnlyError")) {
/**
 * A list of all errors associated with the @ReadOnly constraint.
 */
class ReadOnlyError extends ApiError {
	/**
	 * @access public
	 * @var tnsReadOnlyErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('ReadOnlyError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("RequiredError")) {
/**
 * Errors due to missing required field.
 */
class RequiredError extends ApiError {
	/**
	 * @access public
	 * @var tnsRequiredErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('RequiredError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("SizeLimitError")) {
/**
 * Indicates that the number of entries in the request or response exceeds the system limit.
 */
class SizeLimitError extends ApiError {
	/**
	 * @access public
	 * @var tnsSizeLimitErrorReason
	 */
	public $reason;

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $ApiErrorType = NULL) {
		if(get_parent_class('SizeLimitError')) parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->ApiErrorType = $ApiErrorType;
	}
}}

if (!class_exists("AdExtensionOverrideOperation")) {
/**
 * AdExtensionOverride service operation.
 */
class AdExtensionOverrideOperation extends Operation {
	/**
	 * @access public
	 * @var AdExtensionOverride
	 */
	public $operand;

	public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
		if(get_parent_class('AdExtensionOverrideOperation')) parent::__construct();
		$this->operand = $operand;
		$this->operator = $operator;
		$this->OperationType = $OperationType;
	}
}}

if (!class_exists("AdExtensionOverridePage")) {
/**
 * Represents a page of {@link AdExtensionOverride}s resulting from the query
 * done by {@link AdExtensionOverrideService}.
 */
class AdExtensionOverridePage extends Page {
	/**
	 * @access public
	 * @var AdExtensionOverride[]
	 */
	public $entries;

	public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
		if(get_parent_class('AdExtensionOverridePage')) parent::__construct();
		$this->entries = $entries;
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}}

if (!class_exists("AdExtensionOverrideReturnValue")) {
/**
 * A container for return values from AdExtensionOverrideService.mutate().
 */
class AdExtensionOverrideReturnValue extends ListReturnValue {
	/**
	 * @access public
	 * @var AdExtensionOverride[]
	 */
	public $value;

	public function __construct($value = NULL, $ListReturnValueType = NULL) {
		if(get_parent_class('AdExtensionOverrideReturnValue')) parent::__construct();
		$this->value = $value;
		$this->ListReturnValueType = $ListReturnValueType;
	}
}}

if (!class_exists("ApiException")) {
/**
 * Exception class for holding a list of service errors.
 */
class ApiException extends ApplicationException {
	/**
	 * @access public
	 * @var ApiError[]
	 */
	public $errors;

	public function __construct($errors = NULL, $message = NULL, $ApplicationExceptionType = NULL) {
		if(get_parent_class('ApiException')) parent::__construct();
		$this->errors = $errors;
		$this->message = $message;
		$this->ApplicationExceptionType = $ApplicationExceptionType;
	}
}}

if (!class_exists("DoubleValue")) {
/**
 * Number value type for constructing double valued ranges.
 */
class DoubleValue extends NumberValue {
	/**
	 * @access public
	 * @var double
	 */
	public $number;

	public function __construct($number = NULL, $ComparableValueType = NULL) {
		if(get_parent_class('DoubleValue')) parent::__construct();
		$this->number = $number;
		$this->ComparableValueType = $ComparableValueType;
	}
}}

if (!class_exists("LongValue")) {
/**
 * Number value type for constructing long valued ranges.
 */
class LongValue extends NumberValue {
	/**
	 * @access public
	 * @var integer
	 */
	public $number;

	public function __construct($number = NULL, $ComparableValueType = NULL) {
		if(get_parent_class('LongValue')) parent::__construct();
		$this->number = $number;
		$this->ComparableValueType = $ComparableValueType;
	}
}}

if (!class_exists("AdExtensionOverrideService")) {
/**
 * AdExtensionOverrideService
 * @author WSDLInterpreter
 */
class AdExtensionOverrideService extends AdWordsSoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"getResponse" => "AdExtensionOverrideServiceGetResponse",
		"get" => "AdExtensionOverrideServiceGet",
		"mutate" => "AdExtensionOverrideServiceMutate",
		"mutateResponse" => "AdExtensionOverrideServiceMutateResponse",
		"DateTime" => "AdWordsDateTime",
		"Target" => "AdWordsTarget",
		"SoapHeader" => "SoapRequestHeader",
		"AdExtensionOverrideError" => "AdExtensionOverrideError",
		"ApiError" => "ApiError",
		"AdExtensionOverrideStats" => "AdExtensionOverrideStats",
		"Stats" => "Stats",
		"Address" => "Address",
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"ClientTermsError" => "ClientTermsError",
		"DistinctError" => "DistinctError",
		"DoubleValue" => "DoubleValue",
		"NumberValue" => "NumberValue",
		"GeoPoint" => "GeoPoint",
		"InternalApiError" => "InternalApiError",
		"LocationExtension" => "LocationExtension",
		"AdExtension" => "AdExtension",
		"LocationOverrideInfo" => "LocationOverrideInfo",
		"LongValue" => "LongValue",
		"Money" => "Money",
		"ComparableValue" => "ComparableValue",
		"NotEmptyError" => "NotEmptyError",
		"NotWhitelistedError" => "NotWhitelistedError",
		"NullError" => "NullError",
		"OverrideInfo" => "OverrideInfo",
		"Paging" => "Paging",
		"QuotaCheckError" => "QuotaCheckError",
		"QuotaExceededError" => "QuotaExceededError",
		"ReadOnlyError" => "ReadOnlyError",
		"RequiredError" => "RequiredError",
		"SizeLimitError" => "SizeLimitError",
		"SoapResponseHeader" => "SoapResponseHeader",
		"AdExtensionOverrideSelector" => "AdExtensionOverrideSelector",
		"AdExtensionOverride" => "AdExtensionOverride",
		"AdExtensionOverrideOperation" => "AdExtensionOverrideOperation",
		"Operation" => "Operation",
		"AdExtensionOverridePage" => "AdExtensionOverridePage",
		"Page" => "Page",
		"AdExtensionOverrideReturnValue" => "AdExtensionOverrideReturnValue",
		"ListReturnValue" => "ListReturnValue",
		"ApiException" => "ApiException",
		"ApplicationException" => "ApplicationException",
		"AdExtensionOverride.ApprovalStatus" => "AdExtensionOverrideApprovalStatus",
		"AdExtensionOverride.Status" => "AdExtensionOverrideStatus",
		"AdExtensionOverrideError.Reason" => "AdExtensionOverrideErrorReason",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"DistinctError.Reason" => "DistinctErrorReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"LocationExtension.Source" => "LocationExtensionSource",
		"LocationOverrideInfo.RadiusUnits" => "LocationOverrideInfoRadiusUnits",
		"NotEmptyError.Reason" => "NotEmptyErrorReason",
		"NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
		"NullError.Reason" => "NullErrorReason",
		"Operator" => "Operator",
		"QuotaCheckError.Reason" => "QuotaCheckErrorReason",
		"QuotaExceededError.Reason" => "QuotaExceededErrorReason",
		"ReadOnlyError.Reason" => "ReadOnlyErrorReason",
		"RequiredError.Reason" => "RequiredErrorReason",
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"Stats.Network" => "StatsNetwork",
	);

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl=null, $options, $user) {
		$options["classmap"] = AdExtensionOverrideService::$classmap;
		parent::__construct($wsdl, $options, $user, 'AdExtensionOverrideService');
	}

	/**
	 * Returns a list of AdExtensionOverrides based on an
	 * AdExtensionOverrideSelector.
	 * @param selector the selector specifying the query
	 * @return the page containing the AdExtensionOverride which meet the
	 * criteria specified by the selector
	 */
	public function get($selector) {
		$arg = new AdExtensionOverrideServiceGet($selector);
		$result = $this->__soapCall("get", array($arg));
		return $result->rval;
	}


	/**
	 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
	 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
	 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * <span class="constraint SuppoprtedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
	 * 
	 * 
	 * 
	 * Applies the list of mutate operations.
	 * Conditions for adding an ad-level AdExtension override using an AdExtension
	 * under the Ad's campaign:
	 * 1) If the text ad has never been overridden, an AdExtension override may
	 * be set on the creative using an extension under the campaign, along with
	 * any override info.
	 * 2) If the text ad has been overriden before, the latitude/longitude of the
	 * new extension override must be the same as the previous override and
	 * no override info can be specified (ie. the override info will inherit from
	 * the previous override info).
	 * @param operations the operations to apply. The same ad extension override
	 * cannot be specified in more than one operation.
	 * @return the applied ad extension overrides
	 */
	public function mutate($operations) {
		$arg = new AdExtensionOverrideServiceMutate($operations);
		$result = $this->__soapCall("mutate", array($arg));
		return $result->rval;
	}


}}

?>