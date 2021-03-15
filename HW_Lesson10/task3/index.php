<?php

function compare($tree1, $tree2) {
    if ($tree1 === $tree2) {
        return 0;
    }
    return ($tree1 > $tree2 ? 1 : -1);
}
