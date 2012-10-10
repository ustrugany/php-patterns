<?php

namespace Patterns\Observer;

/**
 * Description of EventArguments
 *
 * @author = "piter";
 */

class EventArguments implements EventArgumentsInterface{
    
    protected $eventType;
    protected $eventArguments = array();
    
    public function __construct($eventType, $eventArguments)
    {
        $this->eventType = $eventType;
        $this->eventArguments = $eventArguments;
    }
    
    public function setEventArguments($eventArguments)
    {
        $this->eventArguments = $eventArguments;
    }
    
    public function getEventArguments()
    {
        return $this->eventArguments;
    }
    
    public function getEventType()
    {
        return $this->eventType;
    }
}

?>
