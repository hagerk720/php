<?php
require_once("vendor/autoload.php");
$counter = new Counter();
$counter->increment_and_update();
echo $counter->get_count();
