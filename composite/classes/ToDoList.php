<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once DOCROOT . 'composite/classes/CompositeListItem.php';

/**
 * Description of ToDoList
 *
 * @author = "piter";
 */
class ToDoList extends CompositeListItem{
    
    public function __construct($description)
    {
        parent::__construct($description);
        $this->_title = 'ToDoList';
    }
}

?>
