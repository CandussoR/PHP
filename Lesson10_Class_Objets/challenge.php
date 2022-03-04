<?php

class StringUtilities {
  static function secondCase($string) {
    $secondCase = "";
    for($i=0 ; $i < strlen($string) ; $i++){
      if (strlen($string) < 2) {
        return $string;
      } elseif ($i !== 1){
       $secondCase .= strtolower($string[$i]);
      } else {
      $secondCase .= strtoupper($string[$i]);
      }
    }
    return $secondCase;
  }
}

class Pajamas {
  private $owner, $fit, $color;

  function __construct($o = "unclaimed", $f = "fine", $c = "white") {
    $this->owner = StringUtilities::secondCase($o);
    $this->fit = $f;
    $this->color = $c;
  }

  public function describe(){
    return "This $this->owner's pajama fits $this->fit and is $this->color.\n";
  }

  public function setFit($new_fit) {
    $this->fit = $new_fit;
  }
}

class ButtonablePajamas extends Pajamas {
  private $button_state = "unbuttoned";

  public function describe(){
    return Pajamas::describe() . " This pajamas has buttons and is now $this->button_state.";
  }

  public function toggleButtons() {
    if ($this->button_state == "unbuttoned") {
      $this->button_state = "buttoned";
    } else {
      $this->button_state = "unbuttoned";
    }
  }
}
$chicken_PJS = new Pajamas("donkey", "large", "black");
echo $chicken_PJS->describe();
echo $chicken_PJS->setFit("tight");
echo $chicken_PJS->describe();
$moose_pjs = new ButtonablePajamas("moose");
echo $moose_pjs->describe();
echo $moose_pjs->toggleButtons();
echo $moose_pjs->describe();
