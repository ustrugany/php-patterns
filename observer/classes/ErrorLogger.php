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
require_once DOCROOT . 'observer/interfaces/ObserverInterface.php';

class ErrorLogger implements ObserverInterface{
    
    public function notify(ObservableInterface $observable, EventArgumentsInterface $eventArguments)
    {
        if(($eventArguments->getEventType() == EmailValidator::EVENT_EMAIL_INVALID) && 
                ($observable instanceof EmailValidator)){
            echo sprintf("Email address %s is invalid <br />", $observable->getEmailAddress());
        }
    }
}

?>
