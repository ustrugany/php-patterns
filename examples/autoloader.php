<?php
    require_once __DIR__.'/../vendor/autoload.php';
    use Tools\Helper;
    
    $url = new Helper\URL;
    define('APP_BASEURL', $url->getBaseUrl());
    echo APP_BASEURL;
    
    $legacy = new Legacy_Some_Bar;
    $legacy = new Legacy_Some_Sub_Foo();
    
?>
