<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class Users
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class Users {

  const BASE_URL = 'users';

  /**
   * Users constructor.
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
  public function getCurrent() {
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
  public function invite() {
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
  
}
