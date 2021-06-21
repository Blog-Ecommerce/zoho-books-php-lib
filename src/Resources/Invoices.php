<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class Invoices
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class Invoices {

  const BASE_URL = 'invoices';

  /**
   * Invoices constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   *
   * @throws Exception
   */
  public function create() {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function update() {
    throw new Exception('Not implemented');
  }

  /**
   * @param $invoiceId
   * @return array|mixed|object
   * @throws Exception
   */
  public function get($invoiceId) {
    return $this->client->get([self::BASE_URL, $invoiceId]);
  }

  /**
   * @param array $query
   * @return array|mixed|object
   * @throws Exception
   */
  public function list(array $query = []) {
    return $this->client->get([self::BASE_URL], $query);
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
  public function void() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function markAsDraft() {
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
  public function getContent() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function remindCustomer() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function bulkReminder() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getPaymentReminderMailContent() {
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
  public function disablePaymentReminder() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function enablePaymentReminder() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function writeOff() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function cancelWriteOff() {
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
  public function listTemplates() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function updateTemplate() {
    throw new Exception('Not implemented');
  }

  /**
   * @param $invoiceId
   * @return array|mixed|object
   * @throws Exception
   */
  public function listPayments($invoiceId) {
    return $this->client->get([self::BASE_URL, $invoiceId, 'payments']);
  }

  /**
   * @param $invoiceId
   * @return array|mixed|object
   * @throws Exception
   */
  public function listCreditsApplied($invoiceId) {
    return $this->client->get([self::BASE_URL, $invoiceId, 'creditsapplied']);
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

}
