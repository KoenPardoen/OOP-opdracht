<?php
class Pikachu extends Pokemon{
    function __construct()
    {
        $this->name = "Pikachu"; 
        $this->energyType = "Electric"; 
        $this->hitpoints = 60; 
        $this->health = 60; 
        $this->addAttack("Electric Ring", 50);
        $this->addAttack("Pika Punch", 20);
        $this->weakness = "Fire"; 
        $this->resistance = "Fighting"; 
    }
}