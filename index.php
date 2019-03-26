<?php
// classes loader
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

// new pokemons
    $pikachu = new Pikachu("pikaki") ;
    $charmander = new Charmander("charnazi");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <title>Pokemon!</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="images/pokeball.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Pokemon Battle
        </a>
    </nav>
    <main>
    <!-- pokemon battle lines -->
        <div class="card w-75 attackLine">
            <div class="card-body ">
                <h5 class="card-title">Attack line</h5>
                <p class="card-text"><?php echo $pikachu->getHealth()?></p>
                <?php  $charmander->attackPokemon($pikachu, $charmander->attacks["Head Butt"]) ?>
                <p class="card-text"><?php echo $pikachu->name . " has been attacked"?></p>
                <p class="card-text"><?php echo $pikachu->getHealth()?></p>

                <p class="card-text"><?php echo $charmander->getHealth()?></p>
                <?php  $pikachu->attackPokemon($charmander, $pikachu->attacks["Pika Punch"]) ?>
                <p class="card-text"><?php echo $charmander->name . " has been attacked"?></p>
                <p class="card-text"><?php echo $charmander->getHealth()?></p>

            </div>
        </div>

        <div class="card attackBox1">
            <h5 class="card-header">HP<?php echo $charmander->health?><span
                    class="namepoke"><?php echo $charmander->name?></span></h5>
            <div class="card-body">
                <?php
                foreach($charmander->attacks as $attack){
            ?>
                <button type="button" name="pokemonAttack" value="pokemonAttack"
                    class="btn btn-outline-secondary"><?php echo $attack->name?></button>

                <?php
                }
            ?>
            </div>
        </div>

        <div class="card attackBox2">
            <h5 class="card-header">HP<?php echo $pikachu->health?><span
                    class="namepoke"><?php echo $pikachu->name?></span></h5>
            <div class="card-body">
                <?php 
                foreach($pikachu->attacks as $attack){
            ?>
                <button type="button" class="btn btn-outline-secondary"><?php echo $attack->name?></button>
                <?php
                }
           ?>
            </div>
        </div>

        <div class="pikachuImg"><img src="images/pikachu.gif" alt="pikachu"></div>
        <div class="charmanderImg"><img src="images/charmander.gif" alt="pikachu"></div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>