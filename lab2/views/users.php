<?php
require_once('../modules/fileFunctions.php');

$users = readFromFile();

foreach ($users as $user) {
    $userDetails = explode(",", $user);
    echo str_repeat("*", 20);
    echo "<div>";
    foreach ($userDetails as $value) {
        echo "<h3> $value </h3>";
    }
    echo "</div>";
}
