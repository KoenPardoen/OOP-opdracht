<?php
class Charmander extends Pokemon
{
    function __construct()
    {
        parent::__construct("Charmander", EnergyType::FIRE, 60, 60, ["Head Butt" => new Attack("Head Butt", 50), "Flare" => new Attack("Flare", 30)], Weakness::WATER, Resistance::FIGHTING);
    }
}