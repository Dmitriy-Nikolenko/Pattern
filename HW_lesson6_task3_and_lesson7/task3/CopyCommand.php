<?php


class CopyCommand extends Command
{
    private $text;
    private $mark;
    private Copy $copy;
    private Cut $cut;


    /**
     * CopyCommand constructor.
     * @param $text
     * @param $mark
     * @param Copy $copy
     */
    public function __construct($text, $mark, Copy $copy)
    {
        $this->text = $text;
        $this->mark = $mark;
        $this->copy = $copy;
    }


    public function execute()
    {
        $this->copy->copyText($this->text);
    }

    public function unExecute()
    {
        $this->cut->cutText($this->text);
    }
}