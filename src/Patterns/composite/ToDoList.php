<?php
namespace Patterns\Composite;

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
