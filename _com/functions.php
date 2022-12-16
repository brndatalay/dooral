<?php
error_reporting(0);
require_once 'vendor/autoload.php';

$dbHost = "localhost";
$dbName = "";
$dbUser = "";
$dbPass = "";

$db = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

$db->set_charset("utf8");

$_POST = clear($_POST);
$_GET = clear($_GET);
$_REQUEST = clear($_REQUEST);

$domain = siteURL()."dooral/";

$path = __DIR__ . "/../";

function debug()
{
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}
function clear($x)
{
    if (!is_array($x)) {
        $x = htmlspecialchars($x, ENT_QUOTES);
        $x = str_replace(PHP_EOL, '', $x);
        $x = trim($x);
    } else {
        array_walk_recursive($x, function (&$item) {
            $item = htmlspecialchars($item, ENT_QUOTES);
            $item = str_replace(PHP_EOL, '', $item);
            $item = trim($item);
        });
    }
    return $x;
}
function unclear($x)
{
    if (!is_array($x)) {
        $x = htmlspecialchars_decode($x, ENT_QUOTES);
        $x = trim($x);
    } else {
        array_walk_recursive($x, function (&$item) {
            $item = htmlspecialchars_decode($item, ENT_QUOTES);
            $item = trim($item);
        });
    }
    return $x;
}
function escape($x)
{
    global $db;
    if (!is_array($x)) {
        $x = trim($x);
        $x = mysqli_escape_string($db, $x);
    } else {
        array_walk_recursive($x, function (&$item) {
            global $db;
            $item = trim($item);
            $item = mysqli_escape_string($db, $item);
        });
    }
    return $x;
}

function obj2arr($obj)
{
    $array = json_decode(json_encode($obj), true);
    return $array;
}

function siteURL()
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
        $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    return $protocol . $domainName . "/";
}

function randomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function slugify($text, $divider = '-')
{
    $text = trim($text);
    $text = str_replace('ü', 'u', $text);
    $text = str_replace('Ü', 'U', $text);
    $text = str_replace('ğ', 'g', $text);
    $text = str_replace('Ğ', 'G', $text);
    $text = str_replace('ş', 's', $text);
    $text = str_replace('Ş', 'S', $text);
    $text = str_replace('ç', 'c', $text);
    $text = str_replace('Ç', 'C', $text);
    $text = str_replace('ö', 'o', $text);
    $text = str_replace('Ö', 'O', $text);
    $text = str_replace('ı', 'i', $text);
    $text = str_replace('İ', 'I', $text);
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, $divider);
    $text = preg_replace('~-+~', $divider, $text);
    $text = strtolower($text);
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}
function ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
function phpMailer($alici, $baslik, $mesaj)
{
    $mail = new PHPMailer;
    $mail->clearAllRecipients();
    $mail->clearAddresses();
    $mail->clearCCs();
    $mail->clearBCCs();
    $mail->clearAttachments();

    $mail->SMTPDebug = 0;

    $mail->isSMTP();
    $mail->Host = 'mail.mezarbakim.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'smtp@mezarbakim.com';
    $mail->Password = 'oavbJobjI';
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setFrom("bilgi@mezarbakim.com", "mezarbakim.com");
    $mail->addReplyTo("bilgi@mezarbakim.com", "mezarbakim.com");

    $mail->addAddress($alici);

    $mail->Subject = $baslik;
    $mail->CharSet = "UTF-8";
    $mail->isHTML(true);
    $mail->Body = $mesaj;

    $mail->send();
}
function luhnCheck($number)
{
    $number = preg_replace('/\D/', '', $number);
    $number_length = strlen($number);
    $parity = $number_length % 2;
    $total = 0;
    for ($i = 0; $i < $number_length; $i++) {
        $digit = $number[$i];
        if ($i % 2 == $parity) {
            $digit *= 2;
            if ($digit > 9) {
                $digit -= 9;
            }
        }
        $total += $digit;
    }
    return ($total % 10 == 0) ? TRUE : FALSE;
}
function ilkHarf($str)
{
    $str = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $str);
    $str = explode(' ', $str);

    $string = '';
    foreach ($str as $st) {
        $k_uzunluk = mb_strlen($st, "UTF-8");
        $ilkKarakter = mb_substr($st, 0, 1, "UTF-8");
        $kalan = mb_substr($st, 1, $k_uzunluk - 1, "UTF-8");
        $string .= mb_strtoupper($ilkKarakter, "UTF-8") . mb_strtolower($kalan, "UTF-8") . ' ';
    }
    $string = substr($string, 0, -1);
    return $string;
}
