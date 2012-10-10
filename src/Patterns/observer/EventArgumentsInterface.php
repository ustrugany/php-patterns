<?php
    namespace Patterns\Observer;

    interface EventArgumentsInterface{
        public function getEventType();
        
        public function getEventArguments();
    }
?>
