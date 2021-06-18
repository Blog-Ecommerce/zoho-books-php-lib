<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class CRMIntegration
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class CRMIntegration {

  const BASE_URL = 'contacts';

  /**
   * CRMIntegration constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @throws Exception
   */
  public function getContactWithAccountId() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getContactWithContactId() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function importWithAccountId() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function importWithContactId() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function importWithVendorId() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listInvoicesWithPotentialId() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listEstimatesWithPotentialId() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listSalesOrderWithPotentialId() {
    throw new Exception('Not implemented');
  }
  
}
