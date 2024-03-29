<?php

namespace Patterns\Strategy;

/**
 * Kontekst uzycia strategii.
 * Strategia jest prywatnym polem inicjowanym tylko jeden raz.
 * @author = "piter";
 */
class Collection implements \Countable{
    
    private $_elements;
    private $_comparator;
    
    public function __construct(array $elments = array())
    {
        $this->_elements = $elments;
    }
    
    public function __toString()
    {
        $elements = array();
        foreach($this->_elements as $element){
            if(is_array($element)){
                $element = 'Array with ' . count($element) . ' elements';
            }
            $elements[] = $element;
        }
        return '(' . implode(', ', $elements) . ')';
    }
    
    public function initComparator(ComparatorInterface $comparator)
    {
        if(isset($this->_comparator)){
            throw new Exception('A comparator is already set');
        }
        
        $this->_comparator = $comparator;
    }
    
    public function sort()
    {
        $callback = array($this->_comparator, 'compare');
        uasort($this->_elements, $callback);
    }
    
    public function count()
    {
        return count($this->_elements);
    }
}

?>
