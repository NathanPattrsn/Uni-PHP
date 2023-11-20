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
class Automobile {
    constructor($make, $model, $wheels)
    public $make;
    public $model;
    public $wheels;

    function summary($make, $model, $wheels){
        $this->make = $make;
        $this->model = $model;
        $this->wheels = $wheels;

    }
        return summary();
}
// EndStudentCode

class Question1Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $bmw = new Automobile('BMW', 'Z2', 4);
        $this->assertEquals('BMW', $bmw->make);
        $this->assertEquals('Z2', $bmw->model);
        $this->assertEquals(4, $bmw->wheels);
        $this->assertEquals('BMW Z2 (4 wheels)', $bmw->summary());
        $ktm = new Automobile('KTM', '1050 Adventure', 2);
        $this->assertEquals('KTM', $ktm->make);
        $this->assertEquals('1050 Adventure', $ktm->model);
        $this->assertEquals(2, $ktm->wheels);
        $this->assertEquals('KTM 1050 Adventure (2 wheels)', $ktm->summary());
    }
}

