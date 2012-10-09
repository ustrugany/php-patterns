<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once DOCROOT . 'decorator/interfaces/HtmlElement.php';

/**
 * Prosta abstrakcyjna klasa, ktora beda wspoldzielic klasy Dekoratorow.
 * @author = "piter";
 */
abstract class HtmlDecorator implements HtmlElement {
    
    protected  $_element;
    
    public function __construct(HtmlElement $element)
    {
        $this->_element = $element;
    }
    
    /**
     * Domyslnie wszystkie operacje sa delegowane.
     * Nie zachodza zadne modyfikacje.
     * Konkretni Dekoratorzy beda przeciazac ta metode.
     * @return type 
     */
    public function getName()
    {
        return $this->_element->getName();
    }
    
    public function __toString()
    {
        return $this->_element->__toString();
    }
}

?>
