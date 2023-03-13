<?php
# require_once('../config.php');

function saveToFile()
{
    $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "../CONTACTS.txt", "a+");
    $written_string = date("M d Y h:i a") . "," . $_SERVER["REMOTE_ADDR"] . "," . $_POST["name"] . "," . $_POST["email"];
    fwrite($fp,  $written_string . PHP_EOL);
    fclose($fp);
}
function readFromFile()
{
    $arr = explode("\n", file_get_contents($_SERVER['DOCUMENT_ROOT'] . "../CONTACTS.txt"));
    return $arr;
}
