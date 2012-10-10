<?php

namespace Patterns\Strategy;

/**
 * Porownuje przez wywolanie metody count
 *
 * @author = "piter";
 */
class CountableObjectComparator implements ComparatorInterface{
    
    public function compare($a, $b)
    {
        $countA = count($a);
        $countB = count($b);
        
        if($countA == $countB){
            return 0;
        }
        
        return ($countA > $countB ? 1 : -1);
    }
}

?>
