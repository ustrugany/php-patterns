<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once DOCROOT . 'composite/classes/ListItem.php';

/**
 * Description of GroceryItem
 *
 * @author = "piter";
 */
class GroceryListItem extends ListItem{
    
    public function __construct($description)
    {
        parent::__construct($description);
        $this->_title = 'GroceryListItem';
    }
}

?>
