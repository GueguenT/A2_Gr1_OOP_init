<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 24/01/15
 * Time: 16:15
 */

session_start();
if(empty($_SESSION))
    header("location: index.php");
else
{
    session_destroy();
    header("location: index.php");
}