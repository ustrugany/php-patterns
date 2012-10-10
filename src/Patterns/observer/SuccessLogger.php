<?php

namespace Patterns\Observer;

/**
 * Description of ErrorLogger
 *
 * @author = "piter";
 */

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
