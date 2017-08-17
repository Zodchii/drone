<?php
require_once('Drone.php');
require_once('CallTypes.php');
$drone = new \Drone\Drone();
$drone->up();
echo "<pre>";
print_r($drone);
