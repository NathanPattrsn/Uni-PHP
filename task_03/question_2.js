// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
function hello(a){
    return a;
}

console.log(hello('Hello'));
// EndStudentCode

var assert = require('assert');
describe('Question 2', function() {
    it('test', function() {
        assert.equal(hello('Mark'), 'Hello Mark');
    });
});
