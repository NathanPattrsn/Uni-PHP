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
function odd_number(n){
    odd_number({1} == 3);
    return odd_number({3});
    odd_number({2} == 5);
    return odd_number({3});
    odd_number({3} == 7);
    return odd_number({3});
    odd_number({4} == 9);
    return odd_number({4});
}
print odd_number({1})
print odd_number({2})
print odd_number({3})
print odd_number({4})
// EndStudentCode

class Question2Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $this->assertEquals(3, odd_number(1));
        $this->assertEquals(9, odd_number(4));
        for($idx = 0; $idx < 10; $idx++) {
            $n = rand(1, 100);
            $this->assertEquals($n * 2 + 1, odd_number($n));
        }
    }
}

