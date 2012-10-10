<?php

namespace Patterns\Strategy;

/**
 * Strategia definiujaca sposob porownywania dwoch obiektow kolekcji.
 *
 * @author = "piter";
 */
interface ComparatorInterface {
    
    /**
     * Porzadkuje rosnaco
     * @return integer -1 jesli $a mniejsze od $b i $a powinno byc przed $b
     *                 1 jesli $a wieksze od $b i $b powinno byc przed $a
     *                 0 jesli rowne
     */
    public function compare($a, $b);
}

?>
