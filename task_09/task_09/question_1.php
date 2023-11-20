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


class Question1Test extends PHPUnit\Framework\TestCase {
    public function test() {
        // StartStudentCode
        var $tree{
        (
            [0] => Array
                (
                    [id] => 1
                    [parent_id] => 0
                    [title] => One
                    [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 2
                                            [parent_id] => 1
                                            [title] => Two
                                            [children] => Array
                                                        (
                                                            [0] => Array
                                                                (
                                                                    [id] => 3
                                                                    [parent_id] => 1
                                                                    [title] => Three
                                                                )
                                                            [0] => Array
                                                                (
                                                                    [id] => 4
                                                                    [parent_id] => 1
                                                                    [title] => Four
                                                                )
                                            [0] => Array
                                        (
                                            [id] => 5
                                            [parent_id] => 1
                                            [title] => Five
                                            [children] => Array
                                        )
                                                            [0] => Array
                                                                (
                                                                    [id] => 6
                                                                    [parent_id] => 1
                                                                    [title] => Six
                                                                )
                                                                [0] => Array
                                                                (
                                                                    [id] => 7
                                                                    [parent_id] => 1
                                                                    [title] => Seven
                                                                )
                                            [0] => Array
                                        (
                                            [id] => 8
                                            [parent_id] => 1
                                            [title] => Eight
                                        )
                                                            [0] => Array
                                                                (
                                                                    [id] => 9
                                                                    [parent_id] => 1
                                                                    [title] => Nine
                                                                )
                                                                [0] => Array
                                                                (
                                                                    [id] => 10
                                                                    [parent_id] => 1
                                                                    [title] => Ten
                                                                )
                                                                [0] => Array
                                                                (
                                                                    [id] => 11
                                                                    [parent_id] => 1
                                                                    [title] => Eleven
                                                                )
                                                            
                                )
                )
        )
        function buildTree(array $elements, $parentId = 0) {
            $branch = array();
        
            foreach ($elements as $element) {
                if ($element['parent_id'] == $parentId) {
                    $children = buildTree($elements, $element['id']);
                    if ($children) {
                        $element['children'] = $children;
                    }
                    $branch[] = $element;
                }
            }
        
            return $branch;
        }
    }
        
        $tree = buildTree($rows);
        // EndStudentCode
        $this->assertEquals(1, $tree->id);
        $this->assertEquals('One', $tree->label);
        $this->assertEquals(3, count($tree->children));
        $this->assertEquals(2, $tree->children[0]->id);
        $this->assertEquals(5, $tree->children[1]->id);
        $this->assertEquals(1, count($tree->children[1]->children));
        $this->assertEquals(1, count($tree->children[1]->children[0]->children));
        $this->assertEquals(8, $tree->children[2]->id);
        $this->assertEquals(3, count($tree->children[2]->children));
    }
}

