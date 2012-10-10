<?php
namespace Patterns\Composite;

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
