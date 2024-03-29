<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class Contacts
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class Contacts {

  const BASE_URL = 'contacts';

  /**
   * Projects constructor.
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
   * List Contacts
   *
   * List all contacts with pagination.
   *
   * @oauthscope : ZohoBooks.contacts.READ
   * @return mixed
   * @throws Exception
   */
  public function list() {
    return $this->client->get([self::BASE_URL]);
  }

  /**
   * Get Contact
   *
   * Get details of a contact.
   *
   * @oauthscope : ZohoBooks.contacts.READ
   * @param $id
   * @return mixed
   * @throws Exception
   */
  public function get($id) {
    return $this->client->get([self::BASE_URL, $id]);
  }

  /**
   *
   * @throws Exception
   */
  public function delete($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function markAsActive($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function markAsInactive($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function enablePortalAccess($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function enablePaymentReminders($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function disablePaymentReminders($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function emailStatement($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function getStatementEmailContent($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function email($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function listComments($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function getAddresses($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function addAdditionalAddress($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function editAdditionalAddress($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function deleteAdditionalAddress($project) {
    throw new Exception('Not implemented');
  }

  /**
   *
   * @throws Exception
   */
  public function listRefunds($project) {
    throw new Exception('Not implemented');
  }

  /**
   * Track 1099
   *
   * @param $contactId
   * @return mixed
   * @throws Exception
   */
  public function track1099($contactId) {
    $path = sprintf(self::BASE_URL . "/%s/track1099", $contactId);
    return $this->client->post($path);
  }

  /**
   * Untrack 1099
   *
   * @param $contactId
   * @return mixed
   * @throws Exception
   */
  public function untrack1099($contactId) {
    $path = sprintf(self::BASE_URL . "/%s/untrack1099", $contactId);
    return $this->client->post($path);
  }
}
