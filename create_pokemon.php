<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 24/01/15
 * Time: 16:25
 */


/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';

use Cartman\Init\Pokemon\Model\PokemonModel;
use Cocur\Slugify\Slugify;

$pokemon = new PokemonModel();
$slugify = new Slugify();

$pokemon
    ->setName('Salut')
    ->setType($pokemon::TYPE_FIRE)
;

$em->persist($pokemon);

$em->flush();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <label for="name">Name :</label>
    <input type="text" name="name" id="name" required autofocus/>
    <label for="type">Type :</label>
    <select  name="type" id="type">
        <option value="0">Fire</option>
        <option value="1">Water</option>
        <option value="2">Plant</option>
    </select>
    <input type="submit" value="Créer Pokémon"/>
</form>
</body>
</html>