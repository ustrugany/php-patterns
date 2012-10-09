<?php
    interface ObserverInterface{
        public function notify(ObservableInterface $objObservable, EventArgumentsInterface $objArguments);
    }
?>
