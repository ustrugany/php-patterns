<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'helpers.php';
            $url = new URL;
            define('BASEURL', $url->getBaseUrl());
            define('DOCROOT', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
            
            /**
             * Zaladowanie odpowiedniego przykladu z wzorcem 
             */
            if(isset($_GET['type'])){
                switch($_GET['type']){
                    case 'observer':
                        require_once 'observer/init.php';
                        break;
                    case 'strategy':
                        require_once 'strategy/init.php';
                        break;
                    case 'adapter':
                        require_once 'adapter/init.php';
                        break;
                    case 'decorator':
                        require_once 'decorator/init.php';
                        break;
                    case 'composite':
                        require_once 'composite/init.php';
                        break;
                }
            }
        ?>
    </body>
</html>
