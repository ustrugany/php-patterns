<?php

    require_once __DIR__.'/../vendor/autoload.php';

    /**
     * Elementy wzorca
     * - Klient: uzywa obiektu implementujacego interfejs Cel 
     * - Cel: miejsce rozszerzenia dla modulu Klienta
     * - Adaptowany: obca zew. bibioteka
     * - Adapter: implementacja Celu ktora przekazuje operacje do Adaptowanego,
     * jednoczesnie chowajac go
     * 
     */
    use Patterns\Adapter;
            
            
    $array = array('one', 'two', 'three');
    $adapter = new Adapter\ArrayAdapter($array);
    $printer = new Adapter\Printer();
    $printer->printAndRemove($adapter);
    var_dump($adapter->contains('one'));
?>