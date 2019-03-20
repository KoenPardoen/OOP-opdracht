<?php
class Charmander extends Pokemon
{
    function __construct()
    {
        $this->name = "Charmander"; 
        $this->energyType = "Fire"; 
        $this->hitpoints = 60; 
        $this->health = 60; 
        $this->addAttack("Head Butt", 10);
        $this->addAttack("Flare", 30);
        $this->weakness = "Water"; 
        $this->resistance = "Lightning"; 
    }
}