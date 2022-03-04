<?php

class Parent {
  public $for_everyone;
  private $var1;
  protected $daddy;

    function setVar($new_var) {
      $var1 = strtolower($new_var);
    }
    function getVar() {
      return $this->var1;
    }
}

class Child extends Parent {
  function setDaddy($daddy) {
    $this->daddy = $daddy;
  }
}
