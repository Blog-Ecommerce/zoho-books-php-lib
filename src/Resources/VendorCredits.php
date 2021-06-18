<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class VendorCredits
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class VendorCredits {

  const BASE_URL = 'vendorcredits';

  /**
   * VendorCredits constructor.
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
  public function convertToOpen() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function void() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function submitForApproval() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function approve() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listCredited() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function applyToBill() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteBills() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function refund() {
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
  public function getRefund() {
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
  public function listRefundsOf() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteRefund() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function addComment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listCommentsAndHistory() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteComment() {
    throw new Exception('Not implemented');
  }

}
