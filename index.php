<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'baseUrl.php';
            define('BASEURL', getBaseUrl());
            define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
            
            switch(isset($_GET['type']) && $_GET['type']){
                case 'observer':
                    require_once 'observer/init.php';
                    break;
            }
        ?>
    </body>
</html>
