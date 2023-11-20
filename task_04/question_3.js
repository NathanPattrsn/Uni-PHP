// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
const str_reverse = (str) => {
    return str ? str_reverse(str.substr(1)) + str[0] : str;
};

str_reverse('foo');
str_reverse('test');
str_reverse('anna');
// EndStudentCode

var assert = require('assert');
describe('Question 3', function() {
    it('test', function() {
        assert.equal(str_reverse('foo'), 'oof');
        assert.equal(str_reverse('test'), 'tset');
        assert.equal(str_reverse('anna'), 'anna');
    });
});
