<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailValidator
 *
 * @author = "piter";
 */
require_once DOCROOT . 'observer/interfaces/ObservableInterface.php';

class EmailValidator implements ObservableInterface{
    
    const EVENT_EMAIL_VALID = 1;
    const EVENT_EMAIL_INVALID = 2;
    
    protected $regExpression = '/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/';
    protected $emailAddress;
    protected $observers;
    
    public function __construct($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        $this->observers = array(array());
    }
    
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }
    
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    
    public function validate()
    {
        if(preg_match($this->regExpression, $this->emailAddress))
        {
            $this->fireEvent(EmailValidator::EVENT_EMAIL_VALID);
        }
        else
        {
            $this->fireEvent(EmailValidator::EVENT_EMAIL_INVALID);
        }
    }
    
    public function addObserver(ObserverInterface $observer, $eventType)
    {
        $this->observers[$eventType][] = $observer;
    }
    
    public function fireEvent($eventType, $eventArguments = array())
    {
        if(array_key_exists($eventType, $this->observers) && is_array($this->observers[$eventType]))
        {
            foreach($this->observers[$eventType] as $observer)
            {
                $event = new EventArguments($eventType, $eventArguments);
                $observer->notify($this, $event);
            }
        }
    }
}

?>
