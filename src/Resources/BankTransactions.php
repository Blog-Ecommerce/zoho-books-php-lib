<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class BankTransactions
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class BankTransactions {

  const BASE_URL = 'banktransactions';

  /**
   * BankTransactions constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @throws Exception
   */
  public function create() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function update() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function get() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function list() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function delete() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getMatching() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function match() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function unmatch() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function exclude() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function restore() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function categorize() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function categorizeExpense() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function uncategorize() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function categorizeVendorPayment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function categorizeCustomerPayment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function categorizeCreditNoteRefunds() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function categorizeVendorCreditRefunds() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function categorizeCustomerPaymentRefund() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function categorizeVendorPaymentRefund() {
    throw new Exception('Not implemented');
  }

}
