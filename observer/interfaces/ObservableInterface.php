<?php
    interface ObservableInterface{
        public function addObserver(ObserverInterface $objObserver, $strEventType);
        
        public function fireEvent($strEventType);
    }
?>
