<?php
    require_once __DIR__.'/../vendor/autoload.php';
    
    use Patterns\Observer;
    
    $validator = new Observer\EmailValidator('gouspin@gmail.com');
    $validator->addObserver(new Observer\ErrorLogger(), Observer\EmailValidator::EVENT_EMAIL_INVALID);
    $validator->addObserver(new Observer\SuccessLogger(), Observer\EmailValidator::EVENT_EMAIL_VALID);
    $validator->validate();
    $validator->setEmailAddress('not_valid_email');
    $validator->validate();
?>
