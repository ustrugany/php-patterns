<?php
    require_once 'classes/Collection.php';
    
    /**
     * Czy do podjęcia decyzji o uzyciu danej strategii nie potrzeba jakiegos
     * osobnego wzorca lub switcha?
     * Odp.
     * The decision is moved at instantiation time, 
     * so you have only one conditional [chain] in a single place, 
     * instead of one for each time a Strategy method would be called.  
     */
    
    $numbers = new Collection(array(4, 6, 1, 7, 3));
    $numbers->initComparator(new NumericComparator);
    $numbers->sort();
    echo $numbers, "<br/>";
    
    $first = array(1, 2, 3);
    $second = array(1, 2, 3, 4);
    $third = new Collection(array(1, 2, 3, 4, 5));
 
    $objects = new Collection(array($first, $second, $third));
    $objects->initComparator(new NumericComparator);
    $objects->sort();
    echo $objects, "<br/>";
?>