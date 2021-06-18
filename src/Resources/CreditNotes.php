<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class CreditNotes
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class CreditNotes {

  const BASE_URL = 'creditnotes';

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
   * Get a credit note
   *
   * Details of an existing creditnote.
   *
   * @oauthscope : ZohoBooks.creditnotes.READ
   * @param $creditNoteId
   * @return mixed
   * @throws Exception
   */
  public function get($creditNoteId) {
    return $this->client->get([self::BASE_URL, $creditNoteId]);
  }

  /**
   * List all Credit Notes
   *
   * List all the Credit Notes.
   *
   * @oauthscope : ZohoBooks.creditnotes.READ
   * @param array $query
   * @return mixed
   * @throws Exception
   */
  public function listAll(array $query = []) {
    return $this->client->get([self::BASE_URL], $query);
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
  public function void() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function convertToDraft() {
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
  public function delete() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function emailHistory() {
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
  public function listInvoicesCredited() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function creditToAnInvoice() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteInvoicesCredited() {
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
  public function getRefund() {
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
  public function deleteRefund() {
    throw new Exception('Not implemented');
  }

}
