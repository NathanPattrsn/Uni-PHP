// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
function reverse_merge(a, b){
    steps = steps + 1;
    console.log(a, b);
    if(a.length > 0 && b.length > 0){
        if (a[0] <= b[0]){
            var result = [a[0]];
            var sorted = merge(a.slice(1), b);
            result = result.concat(sorted);
            return result;
        }else{
            var result = [b[0]];
            var sorted = merge(a, b.slice(1));
            result = result.concat(sorted)
            return result;
        }
    }else if (a.length > 0 && b.length == 0){
        return a;
    }else if (a.length == 0 && b.length > 0){
        return b;
    }
}

console.log(merge([5, 2], [8, 1]));
// EndStudentCode

var assert = require('assert');
describe('Question 2', function() {
    it('test', function() {
        var items = [73, 32, 13, 24, 8, 66];
        var sorted = reverse_merge(items.slice());
        assert.deepEqual(sorted, [73, 66, 32, 24, 13, 8]);
        items = [43, 87, 12];
        sorted = reverse_merge(items.slice());
        assert.deepEqual(sorted, [87, 43, 12]);
    });
});
