<?php

require_once 'node.php';
require_once 'clientNode.php';

/**
 * Find max(tree_value) <= $num
 */
function find(Node $root, $num)
{
    static $maxValue = 0;

    if ($num == $root->getValue()) {
        return $num;
    }

    if ($root->isLeaf()) {
        if ($num < $root->getValue()) {
          return $maxValue;
        }
        return $root->getValue();
    }

    if ($num < $root->getValue()) {
        return find($root->getLeftLeaf(), $num);
    } else {
        $maxValue = $root->getValue();
        return find($root->getRightLeaf(), $num);
    }
}

assert(find($tree, 1) == 1, 'find($tree, 1) == 1, actual = ' . find($tree, 1));
assert(find($tree, 2) == 2, 'find($tree, 2) == 2, actual = ' . find($tree, 2));
assert(find($tree, 3) == 2, 'find($tree, 3) == 2, actual = ' . find($tree, 3));
assert(find($tree, 4) == 2, 'find($tree, 4) == 2, actual = ' . find($tree, 4));
assert(find($tree, 5) == 5, 'find($tree, 5) == 5, actual = ' . find($tree, 5));
assert(find($tree, 6) == 6, 'find($tree, 6) == 6, actual = ' . find($tree, 6));
assert(find($tree, 7) == 6, 'find($tree, 7) == 6, actual = ' . find($tree, 7));
assert(find($tree, 8) == 8, 'find($tree, 8) == 8, actual = ' . find($tree, 8));
assert(find($tree, 9) == 9, 'find($tree, 9) == 9, actual = ' . find($tree, 9));
assert(find($tree, 10) == 10, 'find($tree, 10) == 10, actual = ' . find($tree, 10));

assert(find($tree, 11) == 10, 'find($tree, 11) == 10, actual = ' . find($tree, 11));
assert(find($tree, 12) == 10, 'find($tree, 12) == 10, actual = ' . find($tree, 12));
assert(find($tree, 13) == 10, 'find($tree, 13) == 10, actual = ' . find($tree, 13));
assert(find($tree, 14) == 10, 'find($tree, 14) == 10, actual = ' . find($tree, 14));
assert(find($tree, 15) == 15, 'find($tree, 15) == 15, actual = ' . find($tree, 15));
assert(find($tree, 16) == 15, 'find($tree, 16) == 15, actual = ' . find($tree, 16));
assert(find($tree, 17) == 17, 'find($tree, 17) == 17, actual = ' . find($tree, 17));
assert(find($tree, 18) == 17, 'find($tree, 18) == 17, actual = ' . find($tree, 18));
assert(find($tree, 19) == 19, 'find($tree, 19) == 19, actual = ' . find($tree, 19));
assert(find($tree, 20) == 20, 'find($tree, 20) == 20, actual = ' . find($tree, 20));

assert(find($tree, 21) == 20, 'find($tree, 21) == 20, actual = ' . find($tree, 21));
assert(find($tree, 22) == 20, 'find($tree, 22) == 20, actual = ' . find($tree, 22));
assert(find($tree, 23) == 20, 'find($tree, 23) == 20, actual = ' . find($tree, 23));
assert(find($tree, 24) == 20, 'find($tree, 24) == 20, actual = ' . find($tree, 24));
assert(find($tree, 25) == 20, 'find($tree, 25) == 20, actual = ' . find($tree, 25));
assert(find($tree, 26) == 20, 'find($tree, 26) == 20, actual = ' . find($tree, 26));
assert(find($tree, 27) == 20, 'find($tree, 27) == 20, actual = ' . find($tree, 27));
assert(find($tree, 28) == 20, 'find($tree, 28) == 20, actual = ' . find($tree, 28));
assert(find($tree, 29) == 29, 'find($tree, 29) == 29, actual = ' . find($tree, 29));
assert(find($tree, 30) == 30, 'find($tree, 30) == 30, actual = ' . find($tree, 30));

assert(find($tree, 31) == 31, 'find($tree, 31) == 31, actual = ' . find($tree, 31));
assert(find($tree, 32) == 31, 'find($tree, 32) == 31, actual = ' . find($tree, 32));
assert(find($tree, 33) == 31, 'find($tree, 33) == 31, actual = ' . find($tree, 33));
assert(find($tree, 34) == 31, 'find($tree, 34) == 31, actual = ' . find($tree, 34));
assert(find($tree, 35) == 31, 'find($tree, 35) == 31, actual = ' . find($tree, 35));
assert(find($tree, 36) == 31, 'find($tree, 36) == 31, actual = ' . find($tree, 36));
assert(find($tree, 37) == 31, 'find($tree, 37) == 31, actual = ' . find($tree, 37));
assert(find($tree, 38) == 31, 'find($tree, 38) == 31, actual = ' . find($tree, 38));
assert(find($tree, 39) == 31, 'find($tree, 39) == 31, actual = ' . find($tree, 39));
assert(find($tree, 40) == 40, 'find($tree, 40) == 40, actual = ' . find($tree, 40));

print 'ok';

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