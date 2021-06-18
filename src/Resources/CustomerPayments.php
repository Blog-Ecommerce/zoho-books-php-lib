<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class CustomerPayments
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class CustomerPayments {

  const BASE_URL = 'customerPayments';

  /**
   * CustomerPayments constructor.
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
  public function retrieve() {
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
  public function listRefunds() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function detailsOfRefund() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function refundExcess() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function updateRefund() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteRefund() {
    throw new Exception('Not implemented');
  }

}
