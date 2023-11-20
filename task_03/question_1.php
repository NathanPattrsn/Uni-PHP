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
function twelve($a){
    return $a;
}

print(twelve(12));
// EndStudentCode

class Question1Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $this->assertEquals(12, twelve());
    }
}

