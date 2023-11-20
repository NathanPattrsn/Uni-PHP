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
    constructor(make, model, wheels)
    make = make;
    model = model;
    wheels = wheels;

    function summary(make, model, wheels){
        this.make = make;
        this.model = model;
        this.wheels = wheels;

    }
        return summary();

        Car = inherit(Autombile);
        Automobile.constructor = Car;{
            constructor(make, model, wheels)
            make;
            model;
            wheels = 4;
        }
        class Bike extends Autombile{
            constructor(make, model, wheels)
            make;
            model;
            wheels = 2;
        }
}
// EndStudentCode

var assert = require('assert');
describe('Question 4', function() {
    it('test', function() {
        var bmw = new Car('BMW', 'Z2');
        assert.equal(bmw.make, 'BMW');
        assert.equal(bmw.model, 'Z2');
        assert.equal(bmw.wheels, 4);
        assert.equal(bmw.summary(), 'BMW Z2 (4 wheels)');
        var ktm = new Bike('KTM', '1050 Adventure');
        assert.equal(ktm.make, 'KTM');
        assert.equal(ktm.model, '1050 Adventure');
        assert.equal(ktm.wheels, 2);
        assert.equal(ktm.summary(), 'KTM 1050 Adventure (2 wheels)');
    });
});
