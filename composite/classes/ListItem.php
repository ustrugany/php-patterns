<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once DOCROOT . 'composite/interfaces/ListItemInterface.php';

/**
 * 
 * @author = "piter";
 */
abstract class ListItem implements ListItemInterface{
    
    protected $_title;
    
    protected $_description;
    
    public function __construct($description)
    {
        $this->_description = $description;
    }
    
    /**
     * Klasa Kompozyt bedzie wymagala do dzialania 
     * posiadania tej metody w celu odroznienia 
     * Kompozytu od elementu liscia.
     * @return null 
     */
    public function listItems()
    {
        return null;
    }
    
    public function getDescription()
    {
        return $this->_description;
    }
    
    public function setDescription($description)
    {
        $this->_description = $description;
    }
    
    public function setTitle($title)
    {
        $this->_title = $title;
    }
    
    public function getTitle()
    {
        return $this->_title;
    }
    
    public function __toString()
    {
        $tmp = '<p>%s: %s</p>';
        return sprintf($tmp, $this->_title, $this->_description);
    }
}

?>
