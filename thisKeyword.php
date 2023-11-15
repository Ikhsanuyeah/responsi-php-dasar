<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$Ikhsan = new Person("Ikhsan", "Bengkulu");

// tambahkan value nama di object
$Ikhsan->nama = "Ikhsan";

// panggil function sayHelloNull dengan parameter
$Ikhsan->sayHelloNull(null);

// buat object dari kelas person
$Wahyu = new Person("Wahyu", "Benteng");

// tambahkan value nama di object
$Wahyu->nama = "Wahyu";

// panggil function sayHelloNull dengan parameter null
$Wahyu->sayHelloNull(null);
