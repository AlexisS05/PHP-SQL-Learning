<?php

class Item {
  public $name;
  public $description = 'This is the default';

  protected $code = 1234;

  public function getListingDescription()
  {
    return "Item: " . $this ->name;
  }


  /* Const in classes
  public CONST MAX_LENGTH = 24;
  */
  public static $count = 0;

  /*
  public function __construct($name, $description)
  {
    $this ->name = $name;
    $this ->description = $description;

    static::$count++;
  }
  */

  public function sayHello()
  {
    echo 'Hello';
  }

  public function getName()
  {
    return $this -> name;
  }

  public static function showCount(){
    echo static::$count;
  }
}