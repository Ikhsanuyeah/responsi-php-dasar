<?php 

// buat namespace data\satu 
// dengan class conflict
// class sample
// class dummy
namespace data\satu;
class Conflict {
    public function __construct() {
        echo "ini adalah class " . __CLASS__;
        echo "<br>";
    } 
}
$conflict1 = new Conflict();
 class sample {

 }

 class dummy {

 }
 // buat namespace data\dua
// dengan class conflict
namespace data\dua;
class Conflict {
    public function __construct() {
        echo "ini adalah class " . __CLASS__;
        echo "<br>";
    } 
}
$conflict2 = new Conflict();

spl_autoload_register(function($Conflict){
    $Conflict = explode('\\', $Conflict);
    $Conflict = end($Conflict);
    require_once __DIR__ . '/data/satu/' . $Conflict . '.php';
});

spl_autoload_register(function($Conflict){
    $Conflict = explode('\\', $Conflict);
    $Conflict = end($Conflict);
    require_once __DIR__ . '/data/dua/' . $Conflict . '.php';
});
