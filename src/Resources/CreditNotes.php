<?php

namespace CapsuleB\Zohobooks\Resources;

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

  public function create() {}

  public function update() {}

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
  public function listAll($query = []) {
    return $this->client->get([self::BASE_URL], $query);
  }

}
