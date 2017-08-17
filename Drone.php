<?php

namespace Drone;
/**
 * Class Drone
 * @package drone
 */
class Drone
{
    private $distance = 0;
    private $height = 0;
    private $speed = 0;
    private $direction;

    public function __construct()
    {

    }

    public function up()
    {
        $this->direction = CallTypes::UP;
        return $this;
    }

    public function down()
    {
        $this->direction = CallTypes::DOWN;
        return $this;
    }

    public function left()
    {
        $this->direction = CallTypes::LEFT;
        return $this;
    }

    public function right()
    {
        $this->direction = CallTypes::RIGHT;
        return $this;
    }

    public function faster()
    {
        $this->speed += CallTypes::SPEED_STEP;
        return $this;
    }

    public function slower()
    {
        $this->speed -= CallTypes::SPEED_STEP;
        return $this;
    }

    public function takePicture()
    {
        return $this;
    }

    public function followLead($distance, $height)
    {
        if (!$this->speed) {
            throw new \Exception('Dron is off');
        }
        $this->distance = $distance;
        $this->height = $height;
        return $this;
    }

    public function exitLead()
    {
        $this->distance = 0;
        $this->height = 0;
        return $this;
    }


}