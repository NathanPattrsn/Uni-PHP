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
function str_reverse($str){
    return strrev($str);
}
  
$str = "oof";
echo str_reverse($str)
$str = "tset";
echo str_reverse($str)
$str = "anna";
echo str_reverse($str)
// EndStudentCode

class Question4Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $this->assertEquals('oof', str_reverse('foo'));
        $this->assertEquals('tset', str_reverse('test'));
        $this->assertEquals('anna', str_reverse('anna'));
    }
}

