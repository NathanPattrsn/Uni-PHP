<?php
// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

function foo($a) {
    return $a * 3;
}

class Question2Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $n = 4;
        // StartStudentCode
        $num1 = ($n * 3);
        $num2 = (num1 * 3);
        $num3 = (num2 * 3);
        new $n = $num3;
        return $n;
        // EndStudentCode
        $this->assertEquals(108, $n);
    }
}

