<?php
// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

/**
 * Node class represents a single node in a tree.
 *
 * It has three properties:
 * * id - Sort-order identifier
 * * label - The label
 * * children - List of children
 */
class Node {
    public function __construct($id, $label, $children) {
        $this->id = $id;
        $this->label = $label;
        $this->children = $children;
    }
}

$log_data = [];
/**
 * Add the parameter $node to the $log_data in order to
 * log the order in which the nodes are processed.
 */
function log_node($node) {
    global $log_data;
    $log_data[] = $node->id;
}

// StartStudentCode
function iterative_deepening($needle, $tree){
    $max_depth = $tree_depth($tree);
    for($depth = 1; $depth <= $max_depth; $depth++){
        $result = $depth_first($needle, $tree, $depth);
        if($result !== null){
            return $result;
        }
    }
    return null
}
// EndStudentCode

class Question5Test extends PHPUnit\Framework\TestCase {
    public function test() {
        global $log_data;
        $tree = new Node(87, 'A', [
            new Node(18, 'B', [
                new Node(1, 'C', []),
                new Node(2, 'D', [])
            ]),
            new Node(43, 'E', [
                new Node(23, 'F', []),
                new Node(42, 'G', [])
            ])
        ]);
        $this->assertEquals('D', iterative_deepening(2, $tree)->label);
        $this->assertEquals([87, 87, 18, 43, 87, 18, 1, 2], $log_data);
        $log_data = [];
        $this->assertEquals(null, iterative_deepening(16, $tree));
        $this->assertEquals([87, 87, 18, 43, 87, 18, 1, 2, 43, 23, 42], $log_data);
    }
}

