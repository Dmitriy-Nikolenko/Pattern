<?php


class SquareAdapter implements ISquare
{
    protected SquareAreaLib $square;

    /**
     * SquareAdapter constructor.
     * @param SquareAreaLib $square
     */
    public function __construct(SquareAreaLib $square)
    {
        $this->square = $square;
    }


    function squareArea(float $sideSquare)
    {
        $this->square->getSquareArea($sideSquare);
    }
}