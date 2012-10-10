<?php
namespace Patterns\Composite;

/**
 * Description of GroceryList
 *
 * @author = "piter";
 */
class GroceryList extends CompositeListItem {

    public function __construct($description)
    {
        parent::__construct($description);
        $this->_title = 'GroceryList';
    }
}

?>
