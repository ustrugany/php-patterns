<?php
namespace Patterns\Composite;

class ListPrinter{
    public function printList(ListItemInterface $list)
    {
        echo $list;
        $listItems = $list->listItems();
        if(!is_null($listItems)){
            foreach($listItems as $listItem){
                $this->printList($listItem);
            }
        }
    }
}
?>
