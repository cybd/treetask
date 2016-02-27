<?php

class Node {

    private $value;
    private $leftLeaf = null;
    private $rightLeaf = null;

    public function __construct($value) {
        $this->value = $value;
    }

    public function addValue($value)
    {
        if ($value > $this->getValue()) {
            $this->addRightLeaf($value);
        } else {
            $this->addLeftLeaf($value);
        }
    }

    public function getValue()
    {
        return $this->value;
    }

    public function addLeftLeaf($value)
    {
        if (!is_object($this->leftLeaf)) {
            $this->leftLeaf = new Node($value);
        } else {
            $this->leftLeaf->addValue($value);
        }
    }

    public function addRightLeaf($value)
    {
        if (!is_object($this->rightLeaf)) {
            $this->rightLeaf = new Node($value);
        } else {
            $this->rightLeaf->addValue($value);
        }
    }

    public function getLeftLeaf()
    {
        return $this->leftLeaf;
    }

    public function getRightLeaf()
    {
        return $this->rightLeaf;
    }

    public function isLeaf()
    {
        return !is_object($this->leftLeaf) && !is_object($this->rightLeaf);
    }
}
