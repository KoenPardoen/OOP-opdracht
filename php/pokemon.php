<?php 

class Pokemon {
    protected $name;
    protected $energyType;
    protected $hitpoints;
    protected $health;
    protected $attacks = [];
    protected $weakness;
    protected $resistance;
    
    public function addAttack($name, $hitpoints){
        $attack = new Attack($name, $hitpoints);
        array_push($this->attacks, $attack);
    }

    public function __get($key)
    {
        return $this->$key;
    }
}


