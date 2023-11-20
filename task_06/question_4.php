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
function minimum($a, $b){
    for l in $a and $b:
        output.append(min(l));
        
        print(output)
}
// EndStudentCode

class Question4Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $this->assertEquals([], minimum([], []));
        $a = [37, 4, 42, 62, 82];
        $b = [92, 8, 42, 34, 102];
        $this->assertEquals([37, 4, 42, 34, 82], minimum($a, $b));
    }
}

