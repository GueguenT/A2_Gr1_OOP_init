<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 06/01/15
 * Time: 15:03
 */

require __DIR__.'/vendor/autoload.php';

use Cartman\Init\Pokemon\PokemonFire;
use Cartman\Init\Pokemon\PokemonWater;
use Cartman\Init\Pokemon\PokemonPlant;

$pokemonFire = new PokemonFire();

$pokemonFire
    ->setName('Salameche')
    ->setHP(100)
;

$pokemonWater = new PokemonWater();

$pokemonWater
    ->setName('Carapuce')
    ->setHP(100)
;

$pokemonPlant = new PokemonPlant();

$pokemonPlant
    ->setName('Bulbizarre')
    ->setHP(100)
;

$pokemons = [$pokemonWater, $pokemonPlant, $pokemonFire];
shuffle($pokemons);

$striker   =  array_pop($pokemons);
$goal   =  array_pop($pokemons);



//var_dump($striker, $goal);

$attack = mt_rand(5, 20);

if (true === $striker->isTypeWeak($goal->getType()))
    $attack = (int)ceil($attack / 2);

if (true === $striker->isTypeStrong($goal->getType()))
    $attack = (int)ceil($attack / 2);

$goal->removeHP($attack);

//var_dump('----------------------------------');

//var_dump($striker, $goal);

$name1 = $striker->getName();
$name2 = $goal->getName();
$hpleft = 0;


echo '<h1>'.$name1 .' vs ' .$name2 .'</h1>' .'<br>';
$i = 1;
$matchover = false;
while (false === $matchover):
    $namestriker = $striker->getName();
    $namegoal = $goal->getName();

    echo '<br>' .'<h2>' .'Round' .' ' .$i .' ' .'</h2>'  ;
    echo $namestriker .' attacks ' .$namegoal .'<br>' ;

    $na = mt_rand(1, 3);
    for ($j = 0; $j<$na; $j++) {
        $attack = mt_rand(5, 20);

        if (true === $striker->isTypeWeak($goal->getType()))
            $attack = (int)ceil($attack / 2);

        if (true === $striker->isTypeStrong($goal->getType()))
            $attack = (int)ceil($attack * 2);



        $goal->removeHP((int)$attack);
        $hpleft = $goal->getHP();


        echo '<h3>' .'Attack ' .($j+1) .'/' .$na .'</h3>' ;


        echo $namestriker .' dealt ' .$attack .' dmg to ' .$namegoal .'<br>' .'<br>';
        echo $namegoal .' has ' .$hpleft .' hp left' .'<br>';



        if (0 === $goal->getHP()){
            echo '<br>' .'<h2>' .$namegoal .' is KO' .'</h2>';
            $matchover = true;
            break; }







        //var_dump($striker, $goal);
    }

    if (false === $matchover)
        list($striker,$goal) = [$goal, $striker];

    $i++;
endwhile;

echo '<h1>' .$namestriker .' win' .'</h1>' ;

//var_dump($na);


// list($striker,$goal) = [$goal, $striker]