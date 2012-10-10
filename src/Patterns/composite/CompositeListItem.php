<?php
namespace Patterns\Composite;
/**
 * Description of ListItem
 *
 * @author = "piter";
 */
abstract class CompositeListItem extends ListItem{
    
    protected $_listItems;
    
    public function __construct($description)
    {
        parent::__construct($description);
        $this->_listItems = array();
    }
    
    /**
     * Poniewaz zarowno kolekcje jak liscie traktujemy tak samo
     * musimy zapewnic mozliwosc okreslenia
     * czy na danym etapie mamy do czynienia z obiektem Kompozytu
     * czy Liscia i czy w przypadku Kompozytu mozemy
     * wywolac na nim specyficzne dla niego metody addItem, removeItem
     * 
     * @return null - ListItem, object - CompositeListItem
     */
    public function listItems()
    {
        return $this->_listItems;
    }
    
    public function removeListItem(ListItem $listItem)
    {
        $listItems = array();
        foreach($this->_listItems as $item){
            if($listItem !== $item){
                $listItems[] = $item;
            }
        }
        $this->_listItems = $listItems;
    }
    
    public function addListItem(ListItem $listItem)
    {
        if(in_array($listItem, $this->_listItems, true)){
            return;
        }
        $this->_listItems[] = $listItem;
    }
}

?>
