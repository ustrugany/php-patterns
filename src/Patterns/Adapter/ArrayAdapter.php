<?php

namespace Patterns\Adapter;
/**
 * 
 * Adapter.
 * Adaptowany w tym przypadku jest tablica.
 * Adaptery dla procedularnych struktur sa powszechne w PHP.
 * @author = "piter";
 */
class ArrayAdapter implements CollectionInterface{
    
    private $_array;
    
    public function __construct(array $array)
    {
        $this->_array = $array;
    }
    
    public function add($element)
    {
        $this->_array[] = $element;
    }
    
    public function remove($element)
    {
        $index = array_search($element, $this->_array);
        if($index !== false){
            unset($this->_array[$index]);
        }
    }
    
    public function contains($element)
    {
        return in_array($element, $this->_array);
    }
    
    public function getIterator()
    {
        return new \ArrayIterator($this->_array);
    }
}

?>
