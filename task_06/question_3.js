// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
function minimum(a, b){
    for (l in (a, b));
    output.append(min(l));
    
    print(output)
}
// EndStudentCode

var assert = require('assert');
describe('Question 3', function() {
    it('test', function() {
        var a = [37, 4, 42, 62, 82];
        var b = [92, 8, 42, 34, 102];
        assert.deepEqual(minimum(a, b), [37, 4, 42, 34, 82]);
    });
});
