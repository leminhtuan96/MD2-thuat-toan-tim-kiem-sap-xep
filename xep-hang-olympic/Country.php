<?php

class Country
{
public $name;
public $totalGold;


    public function __construct($name, $totalGold)
    {
        $this->name = $name;
        $this->totalGold = $totalGold;
    }


}