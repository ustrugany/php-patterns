<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once DOCROOT . 'strategy/interfaces/Comparator.php';

/**
 * Porownuje przez operator <
 *
 * @author = "piter";
 */
class NumericComparator  implements Comparator{
    
    public function compare($a, $b)
    {
        if($a == $b){
            return 0;
        }
        
        return $a > $b ? 1 : -1;
    }
}

?>
