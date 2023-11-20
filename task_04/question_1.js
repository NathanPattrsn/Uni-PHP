// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
function even_number(n){
    console.log(n);

    
    const newn = n - 2;

    
    if (newn > 0) {
        even_number(newn);
    }
}

even_number(8);

// EndStudentCode

var assert = require('assert');
describe('Question 1', function() {
    it('test', function() {
        assert.equal(even_number(1), 2);
        assert.equal(even_number(4), 8);
        for(var idx = 0; idx < 10; idx++) {
            var n = Math.floor(Math.random() * 100 + 1);
            assert.equal(even_number(n), 2 * n);
        }
    });
});
