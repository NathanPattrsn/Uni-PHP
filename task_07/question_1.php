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
$steps = 0;

function reverse_insertion($list){
    global $steps;

    for ($idx = 1; $idx < count($list); $idx++){
        $idx2 = $idx;
        $steps = $steps + 1;
        while($idx2 > 0 && $list[idx2 - 1] > $list[$idx2]){
            $tmp = $list[$idx2 - 1];
            $list[$idx2 - 1] = $list[$idx2];
            $list[$idx2] = $tmp;
            $idx2 = $idx2 - 1;
            $steps = $steps + 1;
        }
    }
    return $list;
}
$items = [5, 2, 8, 1];
print_r($items);
$sorted = reverse_insertion($items);
print_r($sorted);
// EndStudentCode

class Question1Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $items = [73, 32, 13, 24, 8, 66];
        $sorted = reverse_insertion($items);
        $this->assertEquals([73, 66, 32, 24, 13, 8], $sorted);
        $items = [43, 87, 12];
        $sorted = reverse_insertion($items);
        $this->assertEquals([87, 43, 12], $sorted);
    }
}

