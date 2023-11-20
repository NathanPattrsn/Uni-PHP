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
function student($a, $b, $c){
    global $steps;
    $steps = $steps + 1;
    if(count($a) > 0 && count($b) > 0 && count($c) > 0){
        if($a[0] <= $b[0] && <= $c[0]){
            return array_merge([$a[0]], merge(array_slice($a, 1), $b));
        }else{
            return array_merge([$b[0]], merge($a, array_slice($b, 1)));
        }else{
            return array_merge([$c[0]], merge($a, $b, array_slice($c, 1)));
        }
    }
}

function student_sort($items){
    if(count($items) > 1){
        $split_point = count($items) / 3;
        $part1 = array_slice($items, 0, $split_point);
        $part2 = array_slice($items, $split_point);
        $part3 = array_slice($items, $split_point);
        $sorted1 = merge_sort($part1);
        $sorted2 = merge_sort($part2);
        $sorted3 = merge_sort($part3);
        return merge($sorted1, $sorted2, $sorted3);
    }else {
        return $items;
    }
}

$items = ['@$snr'];
print_r($items);
$sorted = merge_sort($items);
print_r($sorted);
// EndStudentCode

class Student {
    function __construct($name, $snr) {
        $this->name = $name;
        $this->snr = $snr;
    }
}

class Question5Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $mark = new Student('Mark', 9947832);
        $dave = new Student('Dave', 483373);
        $chris = new Student('Chris', 6482724);
        $students = [$mark, $dave, $chris];
        $sorted = student_sort($students);
        $this->assertEquals([$dave, $chris, $mark], $sorted);
    }
}

