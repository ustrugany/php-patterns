<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ErrorLogger
 *
 * @author = "piter";
 */
require_once DOCROOT . 'observer/interfaces/iObserver.php';

class ErrorLogger implements IObserver{
    
    public function notify(IObservable $observable, IEventArguments $eventArguments)
    {
        if(($eventArguments->getEventType() == EmailValidator::EVENT_EMAIL_INVALID) && 
                ($observable instanceof EmailValidator)){
            echo sprintf("Email address %s is invalid", $observable->getEmailAddress());
        }
    }
}

?>
