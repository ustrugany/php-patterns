<?php

namespace Patterns\Observer;

/**
 * Description of ErrorLogger
 *
 * @author = "piter";
 */

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
