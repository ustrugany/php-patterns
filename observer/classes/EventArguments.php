<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventArguments
 *
 * @author = "piter";
 */
require_once DOCROOT . 'observer/interfaces/iEventArguments.php';

class EventArguments implements IEventArguments{
    
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
