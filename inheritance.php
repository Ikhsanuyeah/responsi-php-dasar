<?php

// import data/person.php
require_once "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager = new Manager();
$manager->nama = "Ikhsan";
$manager->sayHello("Hallo");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vp = new VicePresident();
$vp->nama = "Wahyu";
$vp->sayHello("Hallo");
