<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class BankAccounts
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class BankAccounts {

  const BASE_URL = 'bankaccounts';

  /**
   * BankAccounts constructor.
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
  public function deactivate() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function activate() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function importBankOrCreditCardStatement() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getLastImportedStatement() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteLastImportedStatement() {
    throw new Exception('Not implemented');
  }

}
