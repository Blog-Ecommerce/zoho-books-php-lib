<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class Bills
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class Bills {

  const BASE_URL = 'bills';

  /**
   * Bills constructor.
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
  public function void() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function markAsOpen() {
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
  public function updateBillingAddress() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listPayments() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function applyCredits() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deletePayment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getAttachment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function addAttachment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteAttachment() {
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
  public function addComment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteComment() {
    throw new Exception('Not implemented');
  }

}
