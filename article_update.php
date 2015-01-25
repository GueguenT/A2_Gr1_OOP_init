<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 09/01/15
 * Time: 10:48
 */


/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';

/** @var \Doctrine\ORM\EntityRepository $articleRepository */
$articleRepository = $em->getRepository('Cartman\Init\Article');

/** @var \Cartman\Init\Article $article */
$article = $articleRepository->find(1);

$article->setTitle('Wesh');

$em->flush();

