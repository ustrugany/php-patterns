<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once DOCROOT . 'strategy/interfaces/Comparator.php';

/**
 * Porownuje przez wywolanie metody count
 *
 * @author = "piter";
 */
class CountableObjectComparator implements Comparator{
    
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
