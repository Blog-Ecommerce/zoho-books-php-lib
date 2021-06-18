<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class Taxes
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class Taxes {

  const BASE_URL = 'taxes';

  /**
   * Taxes constructor.
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
  public function getGroup() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function updateGroup() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteGroup() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function createAuthority() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function updateAuthority() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getAuthority() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listAuthority() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteAuthority() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function createExemption() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function updateExemption() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getExemption() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listExemption() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteExemption() {
    throw new Exception('Not implemented');
  }
  
}
