<?php


class Editor
{
    private $text;
    private Copy $copy;
    private Cut $cut;
    private Paste $paste;

    public function getEditor($operator, $text) {
        switch ($operator) {
            case 'copy':
                $this->copy = $text;
                break;
            case 'cut':
                $this->cut = $text;
                break;
            case 'paste':
                $this->paste = $text;
                break;
        }
        echo 'Выбран оператор: ' . $operator . ' Полученный текст: ' . $this->text . PHP_EOL;
    }

}