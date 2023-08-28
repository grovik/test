<?php 

// Načtení JSON dat ze zadané adresy
$jsonData = file_get_contents('https://www.digilabs.cz/hiring/data.php');

// Převedení JSON dat na asociativní pole
$data = json_decode($jsonData, true);



