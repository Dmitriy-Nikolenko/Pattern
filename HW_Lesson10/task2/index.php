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

    public function delete(int $int)
    {
        if ($this->root === null) {
            throw new Exception("Дерево пустое");
        }

        $node = &$this->findNode($int, $this->root);

        if ($node) {
            $this->deleteNode($node);
        } else {
            echo "Число не найдено";
        }
    }

    private function &findNode(int $int, ?BinaryNode &$rootSubtree): ?BinaryNode
    {
        if ($rootSubtree === null || $rootSubtree->value == $int) {
            return $rootSubtree;
        }

        if ($rootSubtree->value > $int) {
            return $this->findNode($int, $rootSubtree->left);
        }
        return $this->findNode($int, $rootSubtree->right);

    }

    private function minNodeValue(BinaryNode $node) {
        if ($node == null) {
            return -1;
        }
        $leftEl = $this->minNodeValue($node->left);
        if ($node->value < $leftEl) {
            return $node->value;
        }
    }

    private function maxNodeValue(BinaryNode $node) {
        if ($node == null) {
            return -1;
        }
        $rightEl = $this->maxNodeValue($node->right);
        if ($node->value > $rightEl) {
            return $node->value;
        }
    }

    private function deleteNode(BinaryNode $node)
    {
        if (is_null($node->right) && is_null($node->left)) {
            $node = null;
        } elseif (is_null($node->left)) {
            $node = $node->right;
        } elseif (is_null($node->right)) {
            $node = $node->left;
        }

        else {
            if (is_null($this->maxNodeValue($node))) {
                $node->left;
            } else {
                $node->right;
            }
        }

    }
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

$tree->delete(5);

print_r($tree);