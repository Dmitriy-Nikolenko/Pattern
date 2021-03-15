<?php

class BinaryNode
{
    public $value;
    public $left = null;
    public $right = null;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

class BinaryTree
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }


    public function insert(int $int)
    {
        $node = new BinaryNode($int);

        if ($this->root === null) {
            $this->root = $node;
        } else {
            $this->insertNode($node, $this->root);
        }
    }

    private function insertNode(BinaryNode $node, &$rootSubtree)
    {
        if ($rootSubtree === null) {
            $rootSubtree = $node;
        } elseif ($rootSubtree->value < $node->value) {
            $this->insertNode($node, $rootSubtree->right);
        } else {
            $this->insertNode($node, $rootSubtree->left);
        }
    }



}

function lnr(BinaryNode $node){
    if(is_null($node))
    { return;}
        lnr($node->left);
        echo $node->value;
        lnr($node->right);

}

function nlr(BinaryNode $node){
    if(is_null($node))
    { return;}
        echo $node->value;
        nlr($node->left);
        nlr($node->right);

}

function lrn(BinaryNode $node){
    if(is_null($node))
    { return; }
        lnr($node->left);
        lnr($node->right);
        echo $node->value;
    }


$tree = new BinaryTree();

$tree->insert(5);
$tree->insert(3);
$tree->insert(4);
$tree->insert(2);
$tree->insert(1);
$tree->insert(0);
$tree->insert(7);
$tree->insert(6);
$tree->insert(8);

lnr($tree);
nlr($tree);
lrn($tree);
