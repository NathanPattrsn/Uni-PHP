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
function grade($mark){

    $mark = readline('Enter mark: ');

    if ($mark >= "70"){
        echo "First";
    elseif ($mark < "70" and >= "60"){
        echo "2:1";
    elseif ($mark < "60" and >= "50"){
        echo "2:2";
    elseif ($mark < "50" and >= "40"){
        echo "Third";
    else ($mark < "40"){
        echo "Fail";
    }
    }
    }
    }
    }
}
// EndStudentCode

class Question3Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $this->assertEquals('First', grade(75));
        $this->assertEquals('First', grade(70));
        $this->assertEquals('2:1', grade(63));
        $this->assertEquals('2:2', grade(56));
        $this->assertEquals('Third', grade(44));
        $this->assertEquals('Fail', grade(21));
    }
}

