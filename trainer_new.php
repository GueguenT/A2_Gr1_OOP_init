<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 09/01/15
 * Time: 12:12
 */

/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';

$username = !empty($_POST['username']) ? $_POST['username'] : null;
$password = !empty($_POST['password']) ? $_POST['password'] : null;

if(!empty($_POST['username']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new Cartman\Init\User();

    $user
        ->setUsername($username)
        ->setPassword($password)
    ;

    $em->persist($user);
    $em->flush();
    header('Location: trainer_connexion.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <label for="username">Username :</label>
    <input type="text" name="username" id="username" required autofocus/>
    <label for="password">Password :</label>
    <input type="password" name="password" id="password" required/>
    <input type="submit" value="Créer User"/>
</form>
</body>
</html>