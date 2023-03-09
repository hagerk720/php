<?php
require_once('config.php');

function isValid($input, $max_length)
{
    if (strlen($input) < $max_length) {
        return true;
    }
    return false;
}
