<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class RecurringBills
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class RecurringBills {

  const BASE_URL = 'recurringbills';

  /**
   * RecurringBills constructor.
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
  public function stop() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function resume() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listHistory() {
    throw new Exception('Not implemented');
  }

}
