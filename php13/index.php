
<?php ini_set('display_errors','1'); ?>
<?php
class Zmogus {
  public $name;
  public $surname;
  public function labas() {
    return 'Hello, my name is ' . $this -> name . ' ' . $this -> surname . '.<br>';
  }
}
$zmogus1 = new Zmogus();
$zmogus2 = new Zmogus();

$zmogus1 -> name = "Laimonas";
$zmogus1 -> surname = "Skrupskelis";

$zmogus2 -> name = "Jonas";
$zmogus2 -> surname = "Jonaitis";

echo $zmogus1 -> labas();
echo $zmogus2 -> labas();

 ?>
