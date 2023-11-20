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
function find($needle, $haystack){
    if (count($haystack) == 0){
        return null;
    }else{
        $middle = floor(count($haystack) / 2);
        if($needle == $haystack[$middle]){
            return $middle;
        }else if($needle < $haystack[$middle]){
            return find($needle, array_slice($haystack, 0, $middle));
        }else{
            return $middle + 1 + find($needle, array_slice($haystack, $middle + 1));
        }
    }
}
// EndStudentCode

class Question2Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $list = [83, 29, 38, 93, 12, 63];
        $this->assertEquals(0, find(83, $list));
        $this->assertEquals(5, find(63, $list));
        $this->assertEquals(null, find(23, $list));
        $this->assertEquals(2, find(38, $list));
    }
}

