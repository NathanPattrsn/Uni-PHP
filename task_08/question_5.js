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
    var left = 0;
    var right = haystack.length - 1;
    while(left <= right){
        var middle = Math.floor(left + (right - left) / 2);
        if(needle == haystack[middle]){
            return middle;
        }else if (haystack[middle] < needle){
            left = middle + 1;
        }else{
            right = middle - 1;
        }
    }
    return null;
}
// EndStudentCode

var assert = require('assert');
describe('Question 5', function() {
    it('test', function() {
        for(var i = 0; i < 100; i++) {
            var list = [];
            for(var idx = 0; idx < Math.floor(Math.random() * 100) + 10; idx++) {
                list.push(Math.random() * 100);
            }
            assert.ok(find(list[Math.random() * list.length], list) <= Math.ceil(Math.log(list.length) / Math.log(2)));
        }
    });
});
