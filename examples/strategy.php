<?php
    require_once __DIR__.'/../vendor/autoload.php';
    
    /**
     * Czy do podjęcia decyzji o uzyciu danej strategii nie potrzeba jakiegos
     * osobnego wzorca lub switcha?
     * Odp.
     * The decision is moved at instantiation time, 
     * so you have only one conditional [chain] in a single place, 
     * instead of one for each time a Strategy method would be called.  
     */
    
    use Patterns\Strategy;
    
    $numbers = new Strategy\Collection(array(4, 6, 1, 7, 3));
    $numbers->initComparator(new Strategy\NumericComparator);
    $numbers->sort();
    echo $numbers, "<br/>";
    
    $first = array(1, 2, 3);
    $second = array(1, 2, 3, 4);
    $third = new Strategy\Collection(array(1, 2, 3, 4, 5));
 
    $objects = new Strategy\Collection(array($first, $second, $third));
    $objects->initComparator(new Strategy\NumericComparator);
    $objects->sort();
    echo $objects, "<br/>";

?>