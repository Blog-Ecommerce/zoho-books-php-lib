<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class VendorPayments
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class VendorPayments {

  const BASE_URL = 'vendorpayments';

  /**
   * VendorPayments constructor.
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
  public function listRefunds() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function detailOfRefund() {
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
  public function deleteFunction() {
    throw new Exception('Not implemented');
  }

}
