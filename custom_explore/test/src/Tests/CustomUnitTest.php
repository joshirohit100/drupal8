<?php

namespace Drupal\custom\explore\Tests;
use Drupal\Tests\UnitTestCase;

/**
 * Custom Unit Test case.
 * 
 * @group MyCustomTest
 */
class CustomUnitTest extends UnitTestCase {
  
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => 'Custom PHPUnit Test case',
      'description' => 'Custom test case to check for PHPUnit functionality.',
      'group' => 'Explore Drupal-8',
    );
  }
  
  public function testArrayValues() {
    $array_first = array(1, 2, 3, 4, 5, 6);
    //$array_second = array(1, 2, 3, 4, 5, 6);
    $array_second = array(2, 1, 3, 4, 6, 5);
    $this->assertArrayEquals($array_first, $array_second, 'Array not equal.');
  }
  
  public function testArrayValue() {
    $array_first = array(1, 2, 3, 4, 5, 6);
    //$array_second = array(1, 2, 3, 4, 5, 6);
    $array_second = array(2, 1, 3, 4, 7, 5);
    $this->assertArrayEquals($array_first, $array_second, 'Array not equal.');
  }
  
}

