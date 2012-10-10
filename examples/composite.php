<?php
    require_once __DIR__.'/../vendor/autoload.php';
    
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
    use Patterns\Composite;
    
    // Kompozyt
    $toDoList = new Composite\ToDoList('Things I have to do!');
    // Kompozyt
    $groceryList = new Composite\GroceryList('Things I have to buy!');
    // dodaje Liscie
    $groceryList->addListItem(new Composite\GroceryListItem('Eggs'));
    $groceryList->addListItem(new Composite\GroceryListItem('Milk'));
    $groceryList->addListItem(new Composite\GroceryListItem('Bread'));
    
    $toDoList->addListItem($groceryList);
    
    /**
     * Klient Kompozytu polega na intefejsie ListItemInterface
     */
    $listPrinter = new Composite\ListPrinter();
    $listPrinter->printList($toDoList);
    
?>