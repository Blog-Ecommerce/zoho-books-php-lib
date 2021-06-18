<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class BaseCurrencyAdjustment
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class BaseCurrencyAdjustment {

  const BASE_URL = 'basecurrencyadjustment';

  /**
   * BaseCurrencyAdjustment constructor.
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
  public function listAccountDetails() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function delete() {
    throw new Exception('Not implemented');
  }
  
}
