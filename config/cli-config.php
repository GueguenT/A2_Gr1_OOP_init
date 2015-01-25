<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 07/01/15
 * Time: 11:43
 */

$entityManager = require __DIR__.'/../bootstrap.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);