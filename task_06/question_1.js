// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

var assert = require('assert');
describe('Question 1', function() {
    it('test', function() {
        for(var idx=0; idx < 10; idx++) {
            var a = Math.round(Math.random() * 100);
            var b = Math.round(Math.random() * 100);
            // StartStudentCode
            if (a > b){
                console.log('Larger');
            } else{
                console.log('Equal or Less');
            }
            // EndStudentCode
            assert.equal(result, a > b ? 'Larger' : 'Equal or Less');
        }
    });
});
