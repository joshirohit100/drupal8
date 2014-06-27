<?php

/**
 * @file
 * Contains \Drupal\custom_explore\Service\AdditionService.
 */

namespace Drupal\custom_explore\Service;

class AdditionService {
  protected $first;
  protected $second;
  
  public function __construct($first, $second) {
    $this->first = $first;
    $this->second = $second;
  }
  
  public function setValue($first, $second) {
    $this->first = $first;
    $this->second = $second;
  }
  
  public function getTotal() {
    return $this->first + $this->second;
  }
}

