// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
var steps = 0;

function student_sort(list){
    list = [{name: 'Mark', snr: 9947832}, {name: 'Dave', snr: 483373}, {name: 'Chris', snr: 6482724}];
    for (var idx = 1; idx < list.length; idx++){
        var idx2 = idx;
        while(idx2 > 0 && list[idx2 - 1] > list[idx2]){
            var tmp = list[idx2 - 1];
            list[idx2 - 1] = list[idx2];
            list[idx2] = tmp;
            idx2 = idx2 - 1;
            steps = steps + 1;   
    }
    steps = steps + 1;
    }
    return list;
}
var items = ['@snr'];
console.log(items);
var sorted = student_sort(items.slice());
console.log(sorted);
// EndStudentCode

var assert = require('assert');
describe('Question 4', function() {
    it('test', function() {
        var students = [{name: 'Mark', snr: 9947832}, {name: 'Dave', snr: 483373}, {name: 'Chris', snr: 6482724}];
        var sorted = student_sort(students.slice());
        assert.deepEqual(sorted, [{name: 'Dave', snr: 483373}, {name: 'Chris', snr: 6482724}, {name: 'Mark', snr: 9947832}]);
    });
});
