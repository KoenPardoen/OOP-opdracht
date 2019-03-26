<?php
class Charmander extends Pokemon
{
    function __construct($name)
    {
        // parameter value(name, energyType, hitpoints, health, attacks, weakness, resistance)
        parent::__construct($name, EnergyType::FIRE, 60, 60, ["Head Butt" => new Attack("Head Butt", 10), "Flare" => new Attack("Flare", 30)], new Weakness(EnergyType::WATER, 1.5), new Resistance(EnergyType::ELECTRIC, 10));
    }
}