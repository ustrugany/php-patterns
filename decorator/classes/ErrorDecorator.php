<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once DOCROOT . 'decorator/classes/HtmlDecorator.php';

/**
 * Description of ErrorDecorator
 *
 * @author = "piter";
 */
class ErrorDecorator extends HtmlDecorator{
    protected $_error;
    
    public function setError($error){
        $this->_error = $error;
    }
    
    public function __toString()
    {
        $tmp = '<span>%s</span>';
        return $this->_element->__toString() . sprintf($tmp, $this->_error);
    }
}

?>
