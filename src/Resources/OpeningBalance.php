<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class OpeningBalance
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class OpeningBalance {

  const BASE_URL = 'settings/openingbalances';

  /**
   * OpeningBalance constructor.
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
  public function delete() {
    throw new Exception('Not implemented');
  }
  
}
