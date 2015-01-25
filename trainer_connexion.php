<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 22/01/15
 * Time: 15:35
 */

/** @var \Doctrine\ORM\EntityManager $em */
session_start();
/**
 * Protection
 */
//if (empty($_SESSION['connected'])) {
    //echo 'Forbidden !';
   // header('Location: index.php');
    //die;
//}
/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';
use Cartman\Init\User;
$username = !empty($_POST['username']) ? $_POST['username'] : null;
$password = !empty($_POST['password']) ? $_POST['password'] : null;

/**
 * Login
 */
if (null !== $username && null !== $password) {
    /** @var \Doctrine\ORM\EntityRepository $userRepository */
    $userRepository = $em->getRepository('Cartman\Init\User');
    /** @var User|null $user */
    $user = $userRepository->findOneBy([
        'username' => $username,
        'password' => $password,
    ]);
    if (null !== $user) {
        $_SESSION['id'] = $user->getId();
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['connected'] = true;
        header('Location: interface_trainer.php');
    }
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
    <input type="submit" value="Connexion"/>
</form>
</body>
</html>