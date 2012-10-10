<?php

require_once __DIR__.'/../vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';

$loader = new Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony' => __DIR__.'/../vendor',
    'Patterns' => __DIR__.'/../src',
    'Tools' => __DIR__.'/../src'
));
$loader->registerPrefixes(array(
    'Legacy_' => __DIR__.'/../src',
));
$loader->register();