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
        }else{
            return null;
        }
        }
    }
}
// EndStudentCode

class Student {
    function __construct($name, $snr) {
        $this->name = $name;
        $this->snr = $snr;
    }
}

class Question4Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $mark = new Student('Mark', 9947832);
        $dave = new Student('Dave', 483373);
        $chris = new Student('Chris', 6482724);
        $students = [$mark, $dave, $chris];
        $this->assertEquals('Dave', find(483373, $students)->name);
    }
}

