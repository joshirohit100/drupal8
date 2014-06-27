<?php

/**
 * @file
 * Contains \Drupal\custom_explore\Controller\HelloController.
 */

namespace Drupal\custom_explore\Controller;

use Drupal\Core\Controller\ControllerBase;
//use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class HelloController extends ControllerBase {
  protected $addition;
  
  public function __construct($addition) {
    $this->addition = $addition;
  }
  
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('custom_explore.add_service')
    );
  }
  
  public function hello() {
    //$data = \Drupal::service('custom_explore.add_service');
    //$data->setValue(3, 7);
    $this->addition->setValue(1, 2);
    $calc_value = $this->addition->getTotal();
    return 'Hello World. Calculated Value is: ' . $calc_value;
  }
}

