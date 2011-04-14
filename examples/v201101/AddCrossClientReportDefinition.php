<?php
/**
 * This example adds a cross-client (MCC) report definition. To get report
 * fields, run GetReportFields.php. To work correctly this example must
 * be run as an MCC account.
 *
 * Tags: ReportDefinitionService.mutate
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @subpackage v201101
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda <api.ekoleda@gmail.com>
 */

error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// AdWordsUser.php directly via require_once.
// $path = '/path/to/aw_api_php_lib/src';
$path = dirname(__FILE__) . '/../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/AdWords/Lib/AdWordsUser.php';

try {
  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Insert client emails below to limit the report to only certain accounts.
  $clientEmails = array();

  // Get the GetReportDefinitionService.
  $reportDefinitionService = $user->GetReportDefinitionService('v201101');

  // Create selector.
  $selector = new Selector();
  $selector->fields = array('ExternalCustomerId', 'AccountDescriptiveName',
      'PrimaryUserLogin', 'Date', 'Id', 'Name', 'Impressions', 'Clicks',
      'Cost');

  // Create report definition.
  $reportDefinition = new ReportDefinition();
  $reportDefinition->reportName = 'Cross-client campaign performance report #'
      . uniqid();
  $reportDefinition->dateRangeType = 'LAST_7_DAYS';
  $reportDefinition->reportType = 'CAMPAIGN_PERFORMANCE_REPORT';
  $reportDefinition->downloadFormat = 'XML';
  $reportDefinition->selector = $selector;
  $reportDefinition->crossClient = TRUE;
  foreach ($clientEmails as $clientEmail) {
    $clientSelector = new ClientSelector();
    $clientSelector->login = $clientEmail;
    $reportDefinition->clientSelectors[] = $clientSelector;
  }

  // Create operations.
  $operation = new ReportDefinitionOperation();
  $operation->operand = $reportDefinition;
  $operation->operator = 'ADD';

  $operations = array($operation);

  // Add report definition.
  $result = $reportDefinitionService->mutate($operations);

  // Display report definitions.
  if ($result != null) {
    foreach ($result as $reportDefinition) {
      printf("Report definition with name '%s' and id '%s' was added.\n",
          $reportDefinition->reportName, $reportDefinition->id);
    }
  } else {
    print "No report definitions were added.\n";
  }
} catch (Exception $e) {
  print $e->getMessage();
}
