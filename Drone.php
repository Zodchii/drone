<?php

namespace drone;
/**
 * Class Drone
 * @package drone
 */
class Drone
{
    private $distance;
    private $height;

    public function __construct()
    {

    }

    public function up()
    {

    }

    public function down()
    {

    }

    public function left()
    {

    }

    public function right()
    {

    }

    public function faster()
    {

    }

    public function slower()
    {

    }

    public function takePicture()
    {

    }

    public function followLead($distance, $height)
    {
        $this->distance = $distance;
        $this->height = $height;

    }

    public function exitLead()
    {
        $this->distance = 0;
        $this->height = 0;
    }


}