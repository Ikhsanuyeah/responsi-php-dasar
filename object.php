<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person = new Person("Ikhsan","Bengkulu");

// manipulasi properti nama, alamat, negara
$person->nama = "Ikhsan";
$person->alamat = "Bengkulu";
$person->negara = "Indonesia";

// menampilkan hasil
echo "nama = {$person->nama}<br>" . PHP_EOL;
echo "alamat = {$person->alamat}<br>" . PHP_EOL;
echo "negara = {$person->negara}<br>" . PHP_EOL;
