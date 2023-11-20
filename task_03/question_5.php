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
function action($control, $callback){
    if ($control < "10"){
        return $callback;
    else ();
    }
}
// EndStudentCode

class Question5Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $nothing = false;
        action(12, function() use (&$nothing) {
           $nothing = true;
        });
        $this->assertEquals(false, $nothing);
        action(8, function() use (&$nothing) {
           $nothing = true;
        });
        $this->assertEquals(true, $nothing);
    }
}

