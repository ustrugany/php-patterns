<?php

namespace Patterns\Decorator;

/**
 * Description of LabelDecorator
 *
 * @author = "piter";
 */
class LabelDecorator extends HtmlDecorator{
    
    protected $_label;
    
    public function setLabel($label)
    {
        $this->_label = $label;
    }
    
    public function __toString()
    {
        $tmp = '<label for="%s">%s</label>';
        $name = $this->getName();
        return sprintf($tmp, $name, $this->_label) . $this->_element->__toString();
    }
}

?>
