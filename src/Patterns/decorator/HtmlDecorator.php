<?php
namespace Patterns\Decorator;


/**
 * Prosta abstrakcyjna klasa, ktora beda wspoldzielic klasy Dekoratorow.
 * @author = "piter";
 */
abstract class HtmlDecorator implements HtmlElementInterface {
    
    protected  $_element;
    
    public function __construct(HtmlElementInterface $element)
    {
        $this->_element = $element;
    }
    
    /**
     * Domyslnie wszystkie operacje sa delegowane.
     * Nie zachodza zadne modyfikacje.
     * Konkretni Dekoratorzy beda przeciazac metody, 
     * którymi beda zaintersowani.
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
