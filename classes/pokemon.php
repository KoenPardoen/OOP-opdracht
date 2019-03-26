<?php 

class Pokemon {
    public $name;
    public $energyType;
    public $hitpoints;
    public $health;
    public $attacks = [];
    public $weakness;
    public $resistance;

      public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance)
    {
        $this->name = $name; 
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints; 
        $this->health = $health; 
        $this->attacks = $attacks;
        $this->weakness = $weakness; 
        $this->resistance = $resistance; 
    }
    
    public function attackPokemon($target, $attack){
        // if else check on pokemon weakness
        if ($target->weakness->energyType == $this->energyType){
            // new damage value based on target weakness
            $damage = $attack->hitpoints * $target->weakness->value;
            $target->health -= $damage; 
        } else {
            $target->health -= $attack->hitpoints; 
        }
    }

    public function getHealth(){
        return $this->name . "'s health is " . $this->health;
    }

}


