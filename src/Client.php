<?php

namespace CapsuleB\ZohoBooks;


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
 * @package CapsuleB\ZohoSubscriptions
 *
 * @property $apiKey
 * @property $baseUrl
 * @property $curlClient
 * @property $requestHeader
 * @property $requestQuery
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

  const BASE_URL = 'https://subscriptions.zoho.eu/api/v1';

  /**
   * Client constructor.
   * @param $apiKey
   */
  public function __construct($apiKey) {
    $this->curlClient = curl_init();
    $this->apiKey     = $apiKey;
    $this->baseUrl    = self::BASE_URL;

    // Init the request header
    $this->requestHeader = [
      'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
      'Authorization: Zoho-authtoken ' . $this->apiKey
    ];

    // Init the request base query
    $this->requestQuery = [];

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
    $this->appendHeader([
      'X-com-zoho-subscriptions-organizationid:' . $organizationId,
    ]);
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
    curl_setopt($this->curlClient, CURLOPT_URL, $this->baseUrl . '/' . $path);
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
