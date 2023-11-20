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

        class Car extends Autombile{
            constructor($make, $model, $wheels)
            public $make;
            public $model;
            $wheels = 4;

            function start(str){
                start = 'Vroooooom';
                print(start);
            }
        }
        class Bike extends Autombile{
            constructor($make, $model, $wheels)
            public $make;
            public $model;
            $wheels = 2;

            function start(str){
                start = 'Vroooooom';
                print(start);
        }
}
// EndStudentCode

class Question5Test extends PHPUnit\Framework\TestCase {
    public function test() {
        $bmw = new Car('BMW', 'Z2');
        $this->assertEquals('BMW', $bmw->make);
        $this->assertEquals('Z2', $bmw->model);
        $this->assertEquals(4, $bmw->wheels);
        $this->assertEquals('BMW Z2 (4 wheels)', $bmw->summary());
        $this->assertEquals('Vroooooom', $bmw->start());
        $ktm = new Bike('KTM', '1050 Adventure');
        $this->assertEquals('KTM', $ktm->make);
        $this->assertEquals('1050 Adventure', $ktm->model);
        $this->assertEquals(2, $ktm->wheels);
        $this->assertEquals('KTM 1050 Adventure (2 wheels)', $ktm->summary());
        $this->assertEquals('Vroooooom', $ktm->start());
    }
}

