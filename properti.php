<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Ikhsan","Bengkulu");

// manipulasi properti nama person
$person1->nama = "ikhsan";

// menampilkan hasil
echo "nama = {$person1->nama}<br>" . PHP_EOL;
echo "alamat = {$person1->alamat}<br>" . PHP_EOL;
echo "negara = {$person1->negara}<br>" . PHP_EOL;
