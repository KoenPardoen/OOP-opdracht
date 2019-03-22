<?php
class Pikachu extends Pokemon{
    function __construct()
    {
        parent::__construct("Pikachu", EnergyType::ELECTRIC, 60, 60, ["Electric Ring" => new Attack("Electric Ring", 50), "Pika Punch" => new Attack("Pika Punch", 20)], Weakness::FIRE, Resistance::FIGHTING);
    }
}