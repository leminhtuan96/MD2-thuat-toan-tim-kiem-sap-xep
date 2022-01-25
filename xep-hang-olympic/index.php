<?php
include_once "Country.php";
include_once "CountryService.php";

$vietnam = new Country("viet nam",20);
$thailan = new Country("thai lan",40);
$nhatban = new Country("nhat ban",50);
$hanquoc = new Country("han quoc",30);

$countryss = new CountryService();
$countryss->add($vietnam);
$countryss->add($thailan);
$countryss->add($nhatban);
$countryss->add($hanquoc);


echo "<pre>";
print_r($countryss->getAll());
$countryss->sapxep();
print_r($countryss->getAll());
