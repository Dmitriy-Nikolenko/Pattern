<?php


abstract class Command
{
    protected $text;
    protected $mark;

    /**
     * Command constructor.
     * @param $text
     * @param $mark
     */
    public function __construct($text, $mark)
    {
        $this->text = $text;
        $this->mark = $mark;
    }

    public abstract function execute();
    public abstract function unExecute();


}