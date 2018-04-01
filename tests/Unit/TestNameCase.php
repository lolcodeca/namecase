<?php
/**
 * Created by PhpStorm.
 * User: lola
 * Date: 01/04/18
 * Time: 7:18 PM
 */

namespace lolcode\Unit;


use lolcode\NameCase;
use PHPUnit\Framework\TestCase;

class TestNameCase extends TestCase {

  private $nameCase;

  public function __construct($name = NULL, array $data = [], $dataName = '') {
    parent::__construct($name, $data, $dataName);

    $this->nameCase = new NameCase();
  }

  public function testAllLower() {
    $lastName = 'smith';
    $properCase = $this->nameCase->name_case($lastName);

    $this->assertEquals('Smith', $properCase,
      'The first letter should be S. The rest lower case.');
  }

  public function testAllUpper() {
    $lastName = 'HOPKINS';
    $properCase = $this->nameCase->name_case($lastName);

    $this->assertEquals('Hopkins', $properCase,
      'The first letter should be H. The rest lower case.');
  }

  public function testMacDonald() {
    $lastName = 'macdonald';
    $properCase = $this->nameCase->name_case($lastName);

    $this->assertEquals('MacDonald', $properCase,
      'The first and third letter should be upper case.');
  }

  public function testMcDonald() {
    $lastName = 'mcdonald';
    $properCase = $this->nameCase->name_case($lastName);

    $this->assertEquals('McDonald', $properCase,
      'The first and third letter should be upper case.');
  }
}