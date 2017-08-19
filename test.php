<?php
require_once('Drone.php');
require_once('CallTypes.php');
$drone = new \Drone\Drone();
$drone->takePicture();
echo "<pre>";
print_r($drone);
