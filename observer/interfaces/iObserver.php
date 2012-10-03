<?php
    interface IObserver{
        public function notify(IObservable $objObservable, IEventArguments $objArguments);
    }
?>
