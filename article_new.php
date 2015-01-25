<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 09/01/15
 * Time: 10:48
 */


/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';

use Cartman\Init\Article;
use Cocur\Slugify\Slugify;

$article = new Article();
$slugify = new Slugify();

$article
    ->setTitle('Salut')
    ->setSlug($slugify->slugify('Salut'))
    ->setStatus($article::STATUS_PENDING)
;

$em->persist($article);

$em->flush();