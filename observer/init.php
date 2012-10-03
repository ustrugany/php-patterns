<?php
    require_once 'classes/EventArguments.php';
    require_once 'classes/EmailValidator.php';
    require_once 'classes/ErrorLogger.php';
    
    $validator = new EmailValidator('gouspin@gmail.com');
    $validator->addObserver(new ErrorLogger(), EmailValidator::EVENT_EMAIL_INVALID);
    $validator->validate();
    $validator->setEmailAddress('not_valid_email');
    $validator->validate();
?>
