<?php
    require_once __DIR__.'/../vendor/autoload.php';

    /**
     * Klasyczny przyklad zastosowania to szereg
     * klas ktore chrakteryzuja sie roznymi cechami,
     * i potrzeba utworzenia obiektu laczacego kilka z tych cech.
     * Np. obiekt Pilka, KolorowaPilka, OdbijajacaPilka
     * jaki obiekt mamy utworzyc gdy chcemy obiekt OdbijajacaKolorowaPilka.
     * Aby uniknac duplikowania kodu 
     * - OdbijajcyPilka
     * - KolorowaPilka
     * w OdbijacaKolorowaPilka mozemy zaprojektowac jedna klase Dekoratora
     * na kazda ceche i klas dekoratorow komponowac pozadane 
     * obiekty.
     * 
     * Komentarz:
     * "Main benefit of decorator is that it affect only individual object 
     * and not all object which itself a big control and flexibility 
     * inheritance doesn't offer. See here for another example of 
     * decorator pattern in Java."
     * 
     * Elmenty wzorca:
     * - interfejs Komponent
     * - klasa Konkretnego Komponentu
     * - abstrakcyjna klasa Dekorator
     * - klasy  Konkretnych Dekoratorow
     */
    use Patterns\Decorator;
    
    $input = new Decorator\InputText('login');
    $labelled = new Decorator\LabelDecorator($input);
    $labelled->setLabel('Login:');
    echo $labelled . '<br />';
    
    $input = new Decorator\InputText('login');
    $error = new Decorator\ErrorDecorator($input);
    $error->setError('Login entered is not valid');
    echo $error . '<br />';
    
    $input = new Decorator\InputText('login');
    $labelled = new Decorator\LabelDecorator($input);
    $labelled->setLabel('Login:');
    $error = new Decorator\ErrorDecorator($labelled);
    $error->setError('Login must be unique');
    echo $error . '<br />';
?>