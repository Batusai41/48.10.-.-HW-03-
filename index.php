<?php

interface CarsInterface
{
    public function moveForward();
    public function moveBack();
    public function ability();
}

abstract class Cars implements CarsInterface
{
    public function moveForward();
    public function moveBack();
    public function ability();
}

class Auto extends Cars
{
    private $color;
    public function getColor()
    {
        return $this->color;
    }
    public function __construct(string $color)
    {
        $this->color = $color;
        echo "Цвет: " . $color . ";"
    }
    public function moveForward() {
        echo('moveForward')
    }
    public function moveBack() {
        echo('moveBack')
    }
    public function ability() {
        echo('oxide, turns, horn')
    }
}

class Tanks extends Cars
{
    public function moveForward() {
        echo('moveForward')
    }
    public function moveBack() {
        echo('moveBack')
    }
    public function ability() {
        echo('Fire')
    }
}

class specialAuto extends Cars
{
    public function moveForward() {
        echo('moveForward')
    }
    public function moveBack() {
        echo('moveBack')
    }
    public function ability() {
        echo('Bucket control')
    }
}
?>