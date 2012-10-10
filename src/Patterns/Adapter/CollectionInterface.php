<?php

namespace Patterns\Adapter;
/**
 * interfejs Celu: mala kolekcja, brak odpowiadajcej wbudowanej funkcjonalnosci w PHP
 * im wiekszy interfejs, tym wiekszy problem z pisaniem Adaptera
 * @author = "piter";
 */
interface CollectionInterface extends \IteratorAggregate{
    
    public function add($elemement);
    
    /**
     * @return boolean 
     */
    public function contains($element);
    
    public function remove($element);
}

?>
