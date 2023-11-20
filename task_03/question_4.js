// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
let array1 = ["4, 3", "3, 4"];

function reverse(arr){
    var newArray = [];
    for (var i = arr.length - 1; i >= 0; i--){
        newArray.push(arr[i])
    }
    return newArray;
}

reverse(array1); // ["3, 4", "4, 3"]
// EndStudentCode

var assert = require('assert');
describe('Question 4', function() {
    it('test', function() {
        assert.deepEqual(reverse([3, 4]), [4, 3]);
    });
});
