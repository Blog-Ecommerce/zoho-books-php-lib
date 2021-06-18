<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class Estimates
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class Estimates {

  const BASE_URL = 'estimates';

  /**
   * CreditNotes constructor.
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
  public function delete() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function markAsSent() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function markAsAccepted() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function markAsDeclined() {
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
  public function email() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function emailMultiple() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getEmailContent() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function bulkExport() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function bulkPrint() {
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
  public function updateShippingAddress() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listTemplate() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function updateTemplate() {
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
  public function addComments() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function updateComment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteComment() {
    throw new Exception('Not implemented');
  }

}
