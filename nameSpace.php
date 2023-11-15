<?php

// buat namespace
namespace masalah;
// import data dari conflict
// buat obeject dari namespace yang di buat
require_once "data/Conflict.php";
require_once "data/helper.php";

class Conflict  {
    public function __const() {
        echo "ini adalah class " . __CLASS__;
    } 

}
$str = new Conflict();

// import data helper
// tampilkan helper menggunakan echo
// masukan Helper\helpMe();
use function Helper\helpMe as help;
help();
