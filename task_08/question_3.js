// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
function find(needle, haystack){
    if(haystack.length > 0){
        if(needle == haystack[0]){
            return 0;
        }else{
        return null;
        }
    }
}
// EndStudentCode

var assert = require('assert');
describe('Question 3', function() {
    it('test', function() {
        var students = [{name: 'Mark', snr: 9947832}, {name: 'Dave', snr: 483373}, {name: 'Chris', snr: 6482724}];
        assert.deepEqual(find(483373, students), {name: 'Dave', snr: 483373});
    });
});
