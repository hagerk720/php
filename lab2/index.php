<?php
require_once('config.php');
require_once('modules/remember.php');
require_once('modules/fileFunctions.php');
require_once('views/contact.php');

$msg = "";
if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
    require_once('modules/isValid.php');
    $validName  = isValid($_POST["name"], __MAX_NAME_LENGTH);
    $validMsg  = isValid($_POST["message"], __MAX_MSG_LENGTH);
    $validEmail = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    if (!$validName) {
        $msg =  _INVALID_NAME_MSG;
    }
    if (!$validMsg) {
        $msg =  _INVALID_MSG_LENGTH_MSG;
    }
    if (!$validEmail) {
        $msg = _INVALID_EMAIL_MSG;
    }
    if ($validName && $validMsg && $validEmail) {
        saveToFile();
        require_once('views/users.php');
        header('Location: views/users.php');

        $msg = "<center>
            <h1>" . _THANK_YOU . "</h1>
                <p>Name " . $_POST["name"] . "</p>
                <p>Email " . $_POST["email"] . "</p>
                <p>Message " . $_POST["message"] . "</p></center>";
    }
    echo ($msg);
} else {
    echo "write all fields";
}

$parameter = isset($_GET);
