<?php
class profile {
var $name = "Ayham Nouisser";
public $First;
public $Last;
protected $age;
private $social_security;
public function __construct($new_name) {
$this->name = $new_name;
}
public function set_name($Identification) {
$this->name = $Identification;
}
}
$bar = new status();
class status extends profile {
public function get_name($new_name) {
if ($this->name != "Akram Nouisser") {
$this->name = strtoupper($new_name) . var_dump(get_class($this));
}
}
}
$bar->get_name();
?>
