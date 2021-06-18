<?php

namespace CapsuleB\ZohoBooks\Resources;

use CapsuleB\ZohoBooks\Client;
use Exception;

/**
 * Class TimeEntries
 * @package ZohoBooks\Resources
 *
 * @property Client $client
 */
class TimeEntries {

  const BASE_URL = 'projects/timeentries';

  /**
   * TimeEntries constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @throws Exception
   */
  public function log() {
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
  public function deleteMultiple() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function startTimer() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function stopTimer() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getTimer() {
    throw new Exception('Not implemented');
  }
  
}
