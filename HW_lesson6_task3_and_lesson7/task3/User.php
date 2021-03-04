<?php


class User
{
    private Copy $copy;
    private Cut $cut;
    private Paste $paste;

    /**
     * User constructor.
     * @param Copy $copy
     * @param Cut $cut
     * @param Paste $paste
     */
    public function __construct()
    {
        $this->copy = $copy;
        $this->cut = $cut;
        $this->paste = $paste;
    }


    public function editor($operator, $text) {

        $action = new CopyCommand($text);
        $action->execute();
        $action->unExecute();
    }

}