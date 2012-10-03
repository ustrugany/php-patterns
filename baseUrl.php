<?php
function getBaseUrl()
{
    $scriptDir = dirname(realpath($_SERVER['SCRIPT_FILENAME']));
    $scriptDir = explode('\\', $scriptDir);
    $scriptDir = end($scriptDir);

    $server_name = $_SERVER['SERVER_NAME'];

    $pageUrl = array();
    $pageUrl[] = 'http:/';
    $pageUrl[] = $server_name;
    $pageUrl[] = $scriptDir;
    $pageUrl = implode('/', $pageUrl);

    $pageUrl .= '/';

    return $pageUrl;
}
?>
