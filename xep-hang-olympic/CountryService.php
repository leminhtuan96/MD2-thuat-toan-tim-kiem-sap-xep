<?php

class CountryService
{
    public $countrys;

    public function add($country)
    {
        $this->countrys[] = $country;
    }

    public function getAll()
    {
        return $this->countrys;
    }

    public function sapxep()
    {
        for ($i = 0; $i < count($this->countrys); $i++) {
            $max = $this->countrys[$i];
            $index = $i;
            for ($j = $i + 1; $j < count($this->countrys); $j++) {
                if ($max->totalGold < $this->countrys[$j]->totalGold){
                    $max = $this->countrys[$j];
                    $index = $j;
                }
            }
            $tem = $this->countrys[$i];
            $this->countrys[$i] = $max;
            $this->countrys[$index] =$tem;
        }
        return $this->countrys;
    }
}