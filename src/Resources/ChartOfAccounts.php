<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class ChartOfAccounts
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class ChartOfAccounts {

  const BASE_URL = 'chartofaccounts';

  /**
   * ChartOfAccounts constructor.
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
  public function markAsActive() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function markAsInactive() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listTransactions() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteTransaction() {
    throw new Exception('Not implemented');
  }
  
}
