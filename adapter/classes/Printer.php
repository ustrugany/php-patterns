<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once DOCROOT . 'adapter/interfaces/Collection.php';

/**
 * Klient. Potrzebuje typu Collection zeby moc dokonac wydruku
 * a chcemy wydrukowac zwykla tablice.
 *
 * @author = "piter";
 */
class Printer {
    public function printAndRemove(Collection $c)
    {
        foreach($c as $index => $element){
            $c->remove($element);
            printf("| %.6s => %.6s |", $index, $element);
        }
        echo "<br />";
    }
}

?>
