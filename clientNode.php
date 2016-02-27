<?php

require_once 'node.php';

$tree = new Node(20);
$tree->addValue(10);
$tree->addValue(30);
$tree->addValue(8);
$tree->addValue(17);
$tree->addValue(19);
$tree->addValue(29);
$tree->addValue(31);
$tree->addValue(5);
$tree->addValue(9);
$tree->addValue(15);
$tree->addValue(19);
$tree->addValue(40);
$tree->addValue(1);
$tree->addValue(6);
$tree->addValue(2);

//            20
//         /       \
//        10        30
//      /    \      / \
//     8      17   29  31
//    / \    /  \        \
//   5   9  15  19       40
//  / \
// 1   6
//  \
//    2