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
   * Create an invoice
   *
   * Create an invoice for your customer.
   *
   * @oauthscope : ZohoBooks.invoices.CREATE
   */
  public function create() {
    return null;
  }

  /**
   * Update an invoice
   *
   * Update an existing invoice. To delete a line item just remove it from the line_items list.
   *
   * @oauthscope : ZohoBooks.invoices.UPDATE
   */
  public function update() {
    return null;
  }

  /**
   * Get an invoice
   *
   * Get the details of an invoice.
   *
   * @oauthscope : ZohoBooks.invoices.READ
   * @param $invoiceId
   * @return mixed
   * @throws Exception
   */
  public function retrieve($invoiceId) {
    return $this->client->get([self::BASE_URL, $invoiceId]);
  }

  /**
   * List invoices
   *
   * List all invoices with pagination.
   *
   * @oauthscope : ZohoBooks.invoices.READ
   * @param array $query
   * @return mixed
   * @throws Exception
   */
  public function listAll(array $query = []) {
    return $this->client->get([self::BASE_URL], $query);
  }

  /**
   * List credits applied
   *
   * Get the list of credits applied for an invoice.
   *
   * @oauthscope : ZohoBooks.invoices.READ
   * @param $invoiceId
   * @return mixed
   * @throws Exception
   */
  public function listCreditsApplied($invoiceId) {
    return $this->client->get([self::BASE_URL, $invoiceId, 'creditsapplied']);
  }

  /**
   * List invoice payments
   *
   * Get the list of payments made for an invoice.
   *
   * @oauthscope : ZohoBooks.invoices.READ
   * @param $invoiceId
   * @return mixed
   * @throws Exception
   */
  public function listPayments($invoiceId) {
    return $this->client->get([self::BASE_URL, $invoiceId, 'payments']);
  }
}
