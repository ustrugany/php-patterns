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
            switch(isset($_GET['type']) && $_GET['type']){
                case 'observer':
                    require_once 'observer/init.php';
                    break;
            }
        ?>
    </body>
</html>
