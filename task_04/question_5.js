// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
function count_whitespace(str){
str = str1 = "This string has five whitespace characters.";
var spaceCount = (str1.split(" ").length - 1);
str = str2 = "Nothing";
var spaceCount = (str2.split(" ").length - 1);
str = str3 = "Just one";
var spaceCount = (str3.split(" ").length - 1);
console.log(spaceCount)
}
// EndStudentCode

var assert = require('assert');
describe('Question 5', function() {
    it('test', function() {
        assert.equal(count_whitespace('This string has five whitespace characters.'), 5);
        assert.equal(count_whitespace('Nothing'), 0);
        assert.equal(count_whitespace('Just one'), 1);
    });
});
