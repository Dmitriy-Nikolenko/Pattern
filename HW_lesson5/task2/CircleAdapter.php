<?php


class CircleAdapter implements ICircle
{
    protected CircleAreaLib $circle;

    /**
     * CircleAdapter constructor.
     * @param CircleAreaLib $circle
     */
    public function __construct(CircleAreaLib $circle)
    {
        $this->circle = $circle;
    }


    function circleArea(float $circumference)
    {
        $this->circle->getCircleArea($circumference);
    }
}