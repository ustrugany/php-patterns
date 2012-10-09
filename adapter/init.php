<?php
    require_once 'classes/ArrayAdapter.php';
    require_once 'classes/Printer.php';
    
    /**
     * Elementy wzorca
     * - Klient: uzywa obiektu implementujacego interfejs Cel 
     * - Cel: miejsce rozszerzenia dla modulu Klienta
     * - Adaptowany: obca zew. bibioteka
     * - Adapter: implementacja Celu ktora przekazuje operacje do Adaptowanego,
     * jednoczesnie chowajac go
     * 
     */
    
    $array = array('one', 'two', 'three');
    $adapter = new ArrayAdapter($array);
    $printer = new Printer();
    $printer->printAndRemove($adapter);
    var_dump($adapter->contains('one'));
?>