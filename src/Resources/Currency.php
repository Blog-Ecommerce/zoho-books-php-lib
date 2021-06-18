<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class Currency
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class Currency {

  const BASE_URL = 'settings/currencies';

  /**
   * Currency constructor.
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
  public function list() {
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
  public function delete() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listExchangeRates() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getExchangeRate() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function createExchangeRate() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function updateExchangeRate() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteExchangeRate() {
    throw new Exception('Not implemented');
  }
  
}
