<?php


class CutCommand extends Command
{
    private $text;
    private $mark;
    private Cut $cut;
    private Paste $paste;

    /**
     * CopyCommand constructor.
     * @param $text
     * @param $mark
     * @param Cut $cut
     */
    public function __construct($text, $mark, Cut $cut)
    {
        $this->text = $text;
        $this->mark = $mark;
        $this->cut = $cut;
    }


    public function execute()
    {
        $this->cut->cutText($this->text);
    }

    public function unExecute()
    {
        $this->paste->pasteText($this->text);
    }
}