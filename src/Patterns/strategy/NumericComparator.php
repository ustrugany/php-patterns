<?php

namespace Patterns\Strategy;

/**
 * Porownuje przez operator <
 *
 * @author = "piter";
 */
class NumericComparator  implements ComparatorInterface{
    
    public function compare($a, $b)
    {
        if($a == $b){
            return 0;
        }
        
        return $a > $b ? 1 : -1;
    }
}

?>
