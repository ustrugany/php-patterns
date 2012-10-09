<?php
    require_once 'classes/GroceryList.php';
    require_once 'classes/GroceryListItem.php';
    require_once 'classes/ToDoList.php';
    require_once 'classes/ListPrinter.php';
    
    /**
     * Celem tego wzorca jest zapewnienie hierarchii
     * obiektów gdzie lisc i kolekcja obiektow
     * maja wspolny interfejs. Klient klasy
     * nie wie i nie musi wiedziec o strukturze
     * organizacji.
     * 
     * Elementy:
     * Klient - komunikuje sie z glownym Komponenetem
     * Komponent - deklaruje interfejs, ktorego przestrzegaja 
     * liscie i kolekcje
     * Leaf - konkretna klasa nie majaca dzieci
     * Kompozyt - konkretna klasa ktora posiada inne Komponenty
     */
    // Kompozyt
    $toDoList = new ToDoList('Things I have to do!');
    // Kompozyt
    $groceryList = new GroceryList('Things I have to buy!');
    // dodaje Liscie
    $groceryList->addListItem(new GroceryListItem('Eggs'));
    $groceryList->addListItem(new GroceryListItem('Milk'));
    $groceryList->addListItem(new GroceryListItem('Bread'));
    
    $toDoList->addListItem($groceryList);
    
    /**
     * Klient Kompozytu polega na intefejsie ListItemInterface
     */
    $listPrinter = new ListPrinter();
    $listPrinter->printList($toDoList);
    
?>