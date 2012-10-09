<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once DOCROOT . 'decorator/classes/HtmlDecorator.php';

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
