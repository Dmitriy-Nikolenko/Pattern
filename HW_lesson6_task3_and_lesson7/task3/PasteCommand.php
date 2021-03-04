<?php


class PasteCommand extends Command
{
    private $text;
    private $mark;
    private Paste $paste;
    private Cut $cut;

    /**
     * CopyCommand constructor.
     * @param $text
     * @param $mark
     * @param Paste $paste
     */
    public function __construct($text, $mark, Paste $paste)
    {
        $this->text = $text;
        $this->mark = $mark;
        $this->paste = $paste;
    }


    public function execute()
    {
        $this->paste->pasteText($this->text);
    }

    public function unExecute()
    {
        $this->cut->cutText($this->text);
    }
}