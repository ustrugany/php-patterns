<?php

namespace Patterns\Decorator;

/**
 * Element <input />
 * jedyny konkretny Komponent.
 * @author = "piter";
 */
class InputText implements HtmlElementInterface{
    
    protected $_name;
    
    public function __construct($name)
    {
        $this->_name = $name;
    }
    
    public function __toString()
    {
        $tmp = '<input type="text" id="%s" name="%s"/>';
        return sprintf($tmp, $this->_name, $this->_name);
    }
    
    public function getName()
    {
        return $this->_name;
    }
}

?>
