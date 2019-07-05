<?php

namespace CapsuleB\Zohobooks\Resources;

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
   * @return null
   */
  public function create() {
    return null;
  }

  /**
   * @return null
   */
  public function update() {
    return null;
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
   * @param $project
   * @return null
   */
  public function delete($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function markAsActive($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function markAsInactive($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function enablePortalAccess($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function enablePaymentReminders($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function disablePaymentReminders($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function emailStatement($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function getStatementEmailContent($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function email($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function listComments($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function getAddresses($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function addAddress($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function editAddress($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function deleteAddress($project) {
    return null;
  }

  /**
   * @param $project
   * @return null
   */
  public function listRefunds($project) {
    return null;
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
