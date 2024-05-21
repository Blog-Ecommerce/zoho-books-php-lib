<?php

namespace CapsuleB\ZohoBooks;

use CapsuleB\ZohoBooks\Enums\EDataCenter;
use CapsuleB\ZohoBooks\Resources\BankAccounts;
use CapsuleB\ZohoBooks\Resources\BankRules;
use CapsuleB\ZohoBooks\Resources\BankTransactions;
use CapsuleB\ZohoBooks\Resources\BaseCurrencyAdjustment;
use CapsuleB\ZohoBooks\Resources\Bills;
use CapsuleB\ZohoBooks\Resources\ChartOfAccounts;
use CapsuleB\ZohoBooks\Resources\ContactPersons;
use CapsuleB\ZohoBooks\Resources\Contacts;
use CapsuleB\ZohoBooks\Resources\CreditNotes;
use CapsuleB\ZohoBooks\Resources\CRMIntegration;
use CapsuleB\ZohoBooks\Resources\Currency;
use CapsuleB\ZohoBooks\Resources\CustomerPayments;
use CapsuleB\ZohoBooks\Resources\Estimates;
use CapsuleB\ZohoBooks\Resources\Expenses;
use CapsuleB\ZohoBooks\Resources\Invoices;
use CapsuleB\ZohoBooks\Resources\Items;
use CapsuleB\ZohoBooks\Resources\Journals;
use CapsuleB\ZohoBooks\Resources\OpeningBalance;
use CapsuleB\ZohoBooks\Resources\Projects;
use CapsuleB\ZohoBooks\Resources\PurchaseOrder;
use CapsuleB\ZohoBooks\Resources\RecurringBills;
use CapsuleB\ZohoBooks\Resources\RecurringExpenses;
use CapsuleB\ZohoBooks\Resources\RecurringInvoices;
use CapsuleB\ZohoBooks\Resources\RetainerInvoices;
use CapsuleB\ZohoBooks\Resources\SalesOrder;
use CapsuleB\ZohoBooks\Resources\Tasks;
use CapsuleB\ZohoBooks\Resources\Taxes;
use CapsuleB\ZohoBooks\Resources\TimeEntries;
use CapsuleB\ZohoBooks\Resources\Users;
use CapsuleB\ZohoBooks\Resources\VendorCredits;
use CapsuleB\ZohoBooks\Resources\VendorPayments;
use Exception;

/**
 * Class Client
 * @package CapsuleB\ZohoBooks
 *
 * @property $baseApiUrl
 * @property $baseAuthUrl
 * @property $curlClient
 * @property $requestUri
 * @property $requestQuery
 * @property $requestHeader
 * @property $clientId
 * @property $clientSecret
 * @property $accessToken
 * @property $refreshToken
 * @property $dataCenter
 *
 * @property BankAccounts           $backAccounts
 * @property BankRules              $bankRules
 * @property BankTransactions       $bankTransactions
 * @property BaseCurrencyAdjustment $baseCurrencyAdjustment
 * @property Bills                  $bills
 * @property ChartOfAccounts        $chartOfAccounts
 * @property ContactPersons         $contactPersons
 * @property Contacts               $contacts
 * @property CreditNotes            $creditNotes
 * @property CRMIntegration         $CRMIntegration
 * @property Currency               $currency
 * @property CustomerPayments       $customerPayments
 * @property Estimates              $estimates
 * @property Expenses               $expenses
 * @property Invoices               $invoices
 * @property Items                  $items
 * @property Journals               $journals
 * @property OpeningBalance         $openingBalance
 * @property Projects               $projects
 * @property PurchaseOrder          $purchaseOrder
 * @property RecurringBills         $recurringBills
 * @property RecurringExpenses      $recurringExpenses
 * @property RecurringInvoices      $recurringInvoices
 * @property RetainerInvoices       $retainerInvoices
 * @property SalesOrder             $salesOrder
 * @property Tasks                  $tasks
 * @property Taxes                  $taxes
 * @property TimeEntries            $timeEntries
 * @property Users                  $users
 * @property VendorCredits          $vendorCredits
 * @property VendorPayments         $vendorPayments
 */
class Client {

  /**
   * Client constructor.
   * @param string $clientId
   * @param string $clientSecret
   * @param string|null $accessToken
   * @param string|null $refreshToken
   * @param string $dataCenter
   * @throws Exception
   */
  public function __construct(string $clientId, string $clientSecret, string $accessToken = null, string $refreshToken = null, string $dataCenter = EDataCenter::UNITED_STATES) {
    $this->curlClient = curl_init();

    // Init the infos
    $this->clientId     = $clientId;
    $this->clientSecret = $clientSecret;
    $this->accessToken  = $accessToken;
    $this->refreshToken = $refreshToken;
    $this->dataCenter   = $dataCenter;

    // Init the url, header and query
    $this->initBaseUrl();
    $this->initHeader();
    $this->initQuery();

    // Init the Resources
    $this->backAccounts           = new BankAccounts($this);
    $this->bankRules              = new BankRules($this);
    $this->bankTransactions       = new BankTransactions($this);
    $this->baseCurrencyAdjustment = new BaseCurrencyAdjustment($this);
    $this->bills                  = new Bills($this);
    $this->chartOfAccounts        = new ChartOfAccounts($this);
    $this->contactPersons         = new ContactPersons($this);
    $this->contacts               = new Contacts($this);
    $this->creditNotes            = new CreditNotes($this);
    $this->CRMIntegration         = new CRMIntegration($this);
    $this->currency               = new Currency($this);
    $this->customerPayments       = new CustomerPayments($this);
    $this->estimates              = new Estimates($this);
    $this->expenses               = new Expenses($this);
    $this->invoices               = new Invoices($this);
    $this->items                  = new Items($this);
    $this->journals               = new Journals($this);
    $this->openingBalance         = new OpeningBalance($this);
    $this->projects               = new Projects($this);
    $this->purchaseOrder          = new PurchaseOrder($this);
    $this->recurringBills         = new RecurringBills($this);
    $this->recurringExpenses      = new RecurringExpenses($this);
    $this->recurringInvoices      = new RecurringInvoices($this);
    $this->retainerInvoices       = new RetainerInvoices($this);
    $this->salesOrder             = new SalesOrder($this);
    $this->tasks                  = new Tasks($this);
    $this->taxes                  = new Taxes($this);
    $this->timeEntries            = new TimeEntries($this);
    $this->users                  = new Users($this);
    $this->vendorCredits          = new VendorCredits($this);
    $this->vendorPayments         = new VendorPayments($this);
  }

  /**
   * Inits the Base Url by checking which one to use base on region
   * @throws Exception
   */
  private function initBaseUrl() {
    if (empty($this->dataCenter) || !in_array($this->dataCenter, EDataCenter::getValues())) {
      $this->baseApiUrl = "https://www.zohoapis.com/books/v3";
      $this->baseAuthUrl = "https://accounts.zoho.com";
    } else {
      $this->baseApiUrl = "https://books.zoho{$this->dataCenter}/api/v3";
      $this->baseAuthUrl = "https://accounts.zoho{$this->dataCenter}";
    }

    // Defaults the base request uri
    $this->requestUri = $this->baseApiUrl;
  }

  /**
   * Init the request header
   */
  private function initHeader() {
    $this->requestHeader = [
      'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
      'Authorization: Zoho-oauthtoken ' . $this->accessToken
    ];
  }

  /**
   * Init the request base query
   */
  private function initQuery() {
    $this->requestQuery = [];
  }

  /**
   * @param array $query
   */
  protected function appendQuery(array $query = []) {
    $this->requestQuery += $this->wrap($query);
  }

  /**
   * @param array $header
   */
  protected function appendHeader(array $header = []) {
    $this->requestHeader = array_merge($this->requestHeader, $this->wrap($header));
  }

  /**
   * @param $organizationId
   */
  public function setOrganizationId($organizationId) {
    $this->appendQuery([
      'organization_id' => $organizationId,
    ]);
  }

  /**
   * @throws Exception
   */
  public function oAuthUserInfo() {
    // Reset temporarily the header
    $this->requestHeader = [
      'Content-Type: application/json',
      'Authorization: Bearer ' . $this->accessToken
    ];

    // Make the request to Generate Access and Refresh Tokens
    $this->requestUri = $this->baseAuthUrl;
    $userInfo = $this->get(['oauth/user/info']);

    // Return the retrieved user info
    return $userInfo;
  }

  /**
   * Generating a Grant Token
   *
   * @throws Exception
   */
  public function oAuthGrantTokenUri() {
    // Return GET url to be executed from a browser
  }

  /**
   * Generate Access and Refresh Tokens
   *
   * @param string $code
   * @param string $scopes
   * @param string|null $redirectUri
   * @param string|null $state
   * @return array|mixed|object
   * @throws Exception
   */
  public function oAuthAccessToken(string $code, string $scopes, string $redirectUri = null, string $state = null) {
    // Reset temporarily the header
    $this->requestHeader = [
      'Content-Type: application/json'
    ];

    // Make the request to Generate Access and Refresh Tokens
    $this->requestUri = $this->baseAuthUrl;
    $responseToken = $this->post(['oauth/v2/token'], [
      'code'          => $code,
      'client_id'     => $this->clientId,
      'client_secret' => $this->clientSecret,
      'redirect_uri'  => $redirectUri,
      'grant_type'    => 'authorization_code',
      'scope'         => $scopes,
      'state'         => $state
    ]);

    // Store the new token
    $this->accessToken  = $responseToken->access_token ?? null;
    $this->refreshToken = $responseToken->refresh_token ?? null;

    // Return the newly created token
    return $responseToken;
  }

  /**
   * Generate Access Token From Refresh Token
   *
   * @param string $refreshToken
   * @param string|null $redirectUri
   * @return array|mixed|object
   * @throws Exception
   */
  public function oAuthRefreshToken(string $refreshToken, string $redirectUri = null) {
    // Reset temporarily the header
    $this->requestHeader = [
      'Content-Type: application/json',
    ];

    // Make the request to Generate Access and Refresh Tokens
    $this->requestUri = $this->baseAuthUrl;
    $responseToken = $this->post(['oauth/v2/token'], [
      'refresh_token' => $refreshToken,
      'client_id'     => $this->clientId,
      'client_secret' => $this->clientSecret,
      'redirect_uri'  => $redirectUri,
      'grant_type'    => 'refresh_token',
    ]);

    // Store the new token
    $this->accessToken  = $responseToken->access_token ?? null;
    $this->refreshToken = $responseToken->refresh_token ?? null;

    // Return the newly created token
    return $responseToken;
  }

  /**
   * Revoking a Refresh Token
   *
   * @param string $token
   * @return array|mixed|object
   * @throws Exception
   */
  public function oAuthRevokeToken(string $token) {
    // Reset temporarily the header
    $this->requestHeader = [
      'Content-Type: application/json',
    ];

    // Make the request to Generate Access and Refresh Tokens
    $this->requestUri = $this->baseAuthUrl;
    $responseToken = $this->post(['oauth/v2/token/revoke'], [
      'token' => $token
    ]);

    // Store the new token
    $this->accessToken  = $responseToken->access_token ?? null;
    $this->refreshToken = $responseToken->refresh_token ?? null;

    // Return the newly created token
    return $responseToken;
  }

  /**
   * @param $method
   * @param $path
   * @param array $query
   * @param array $params
   * @return array|mixed|object
   * @throws Exception
   */
  protected function request($method, $path, array $query = [], array $params = []) {
    // Reset any previous request
    $this->curlClient = curl_init();

    // Create path
    if (is_array($path)) {
      $path = implode('/', $path);
    }

    // Append the query to the request base queries
    $query = array_merge($this->requestQuery, $query);

    // Add query params
    if (!empty($query)) {
      $path .= '?' . http_build_query($query);
    }

    // Set the request params
    curl_setopt($this->curlClient, CURLOPT_URL, $this->requestUri . '/' . $path);
    curl_setopt($this->curlClient, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($this->curlClient, CURLOPT_HEADER, FALSE);
    curl_setopt($this->curlClient, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($this->curlClient, CURLOPT_HTTPHEADER, $this->requestHeader);

    // Add params if any
    if (!empty($params)) {
      curl_setopt($this->curlClient, CURLOPT_POSTFIELDS, json_encode($params));
    }

    // Does the request
    $response = json_decode(curl_exec($this->curlClient));
    $httpcode = curl_getinfo($this->curlClient, CURLINFO_HTTP_CODE);
    curl_close($this->curlClient);

    // Return the response
    if ($httpcode == 200 || $httpcode == 201) {
      return $response;
    } else {
      throw new Exception($response->message);
    }
  }

  /**
   * GET Method
   *
   * @param $path
   * @param array $query
   * @param array $params
   * @return mixed
   * @throws Exception
   */
  public function get($path, array $query = [], array $params = []) {
    return $this->request('GET', $path, $this->wrap($query), $this->wrap($params));
  }

  /**
   * POST Method
   *
   * @param $path
   * @param array $query
   * @param array $params
   * @return mixed
   * @throws Exception
   */
  public function post($path, array $query = [], array $params = []) {
    return $this->request('POST', $path, $this->wrap($query), $this->wrap($params));
  }

  /**
   * PUT Method
   *
   * @param $path
   * @param array $query
   * @param array $params
   * @return mixed
   * @throws Exception
   */
  public function put($path, array $query = [], array $params = []) {
    return $this->request('PUT', $path, $this->wrap($query), $this->wrap($params));
  }

  /**
   * DELETE Method
   *
   * @param $path
   * @param array $query
   * @param array $params
   * @return mixed
   * @throws Exception
   */
  public function delete($path, array $query = [], array $params = []) {
    return $this->request('DELETE', $path, $this->wrap($query), $this->wrap($params));
  }

  /**
   * If the given value is not an array, wrap it in one.
   *
   * @param  mixed  $value
   * @return array
   */
  private static function wrap($value): array {
    return !is_array($value) ? [$value] : $value;
  }
}
