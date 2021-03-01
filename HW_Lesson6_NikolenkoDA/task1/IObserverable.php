<?php


interface IObserverable
{
    public function addObserver(IObserver $observer);
    public function removeObserver(IObserver $observer);
    public function notify();
}