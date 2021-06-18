<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class Projects
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class Projects {

  const BASE_URL = 'projects';

  /**
   * Projects constructor.
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
  public function activate() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function inactivate() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function clone() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function assignUsers() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function inviteUsers() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listUsers() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getUser() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteUser() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function postComment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function listComments() {
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
  public function listInvoices() {
    throw new Exception('Not implemented');
  }
  
}
