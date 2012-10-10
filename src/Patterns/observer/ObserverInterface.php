<?php
    namespace Patterns\Observer;

    interface ObserverInterface{
        public function notify(ObservableInterface $objObservable, EventArgumentsInterface $objArguments);
    }
?>
