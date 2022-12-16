<?php
require_once("_com/functions.php");

error_reporting(E_ALL);
ini_set(E_ALL);
session_start();

$uri = explode("?", $_SERVER['REQUEST_URI']);

$url = $uri[0];
$get = $uri[1];

parse_str($get, $get);

$url = clear($url);
$get = clear($get);

$url = explode('/', $url);

unset($url[0]);
$url = array_values($url);

if ($_SESSION['lang'] == '') {
    $_SESSION['lang'] = 'en';
}
$title = 'Dooral';
$desciption = 'Description';

if ($url[1] == 'lang') {
    $_SESSION['lang'] = $url[2];
    header("location:" . $domain);
} else {

    if ($url[1] == null) {
        $url[1] = 'default';
    }
    if (!file_exists("templates/" . $url[1] . ".php")) {
        $url[1] = 'default';
    }
    if (!file_exists("templates/lang_" . $_SESSION['lang'] . ".php")) {
        $_SESSION['lang'] ="en";
    }
    require_once("templates/lang_" . $_SESSION['lang'] . ".php");
    require_once("templates/header.php");
    require_once("templates/" . $url[1] . ".php");
    require_once("templates/footer.php");
}
?>