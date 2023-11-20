<?php
// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
function string_insertion($list){
    $list = ['ab', 'aab', 'a'];

    usort($list, function($a){
        return strlen($a)
    });
};
// EndStudentCode

class Question3Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $items = ['Mark', 'Dave', 'Tom', 'Robert'];
        $sorted = string_insertion($items);
        $this->assertEquals(['Tom', 'Mark', 'Dave', 'Robert'], $sorted);
        $items = ['aabb', 'aa', 'aba', 'b'];
        $sorted = string_insertion($items);
        $this->assertEquals(['b', 'aa', 'aba', 'aabb'], $sorted);
    }
}

