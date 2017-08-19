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
        if ($_REQUEST) {
            foreach ($_REQUEST as $key => $value) {
                if (isset($this->$key)) {
                    $this->$key = $value;
                }
            }
        }
        return $this;
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
        $pictureName = time() . '.jpg';
        try {
            file_put_contents(CallTypes::PICTURE_FOLDER . $pictureName, file_get_contents('php://input'));
        } catch (\Exception $exception) {
            echo "Problem to take picture:<br>" . $exception->getMessage();
        }
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