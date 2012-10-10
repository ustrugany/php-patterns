<?php
namespace Patterns\Adapter;

/**
 * Klient. Potrzebuje typu Collection zeby moc dokonac wydruku
 * a chcemy wydrukowac zwykla tablice.
 *
 * @author = "piter";
 */
class Printer {
    public function printAndRemove(CollectionInterface $c)
    {
        foreach($c as $index => $element){
            $c->remove($element);
            printf("| %.6s => %.6s |", $index, $element);
        }
        echo "<br />";
    }
}

?>
