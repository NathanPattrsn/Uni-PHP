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
            var idx = find(needle, haystack.slice(1));
            if(idx !== null){
                idx = idx + 1;
            }
            return idx;
        }
    }else{
        return null;
    }
}
// EndStudentCode

var assert = require('assert');
describe('Question 1', function() {
    it('test', function() {
        var list = [83, 29, 38, 93, 12, 63];
        assert.equal(find(83, list), 0);
        assert.equal(find(63, list), 5);
        assert.equal(find(23, list), null);
        assert.equal(find(38, list), 2);
    });
});
