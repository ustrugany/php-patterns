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

class SuccessLogger implements ObserverInterface{
    
    public function notify(ObservableInterface $observable, EventArgumentsInterface $eventArguments)
    {
        if(($eventArguments->getEventType() == EmailValidator::EVENT_EMAIL_VALID) && 
                ($observable instanceof EmailValidator)){
            echo sprintf("Email address %s is valid <br />", $observable->getEmailAddress());
        }
    }
}

?>
