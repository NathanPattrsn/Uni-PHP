// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

// StartStudentCode
function interest(amount, years, rate){
    float computeRecursive(float amount, float years, int rate)
{
   if ( years == 0 )
   {
      return amount;
   }

   float interest = amount * years/100;
   return computeRecursive(amount + interest, years, rate-1);
}
}
// EndStudentCode

var assert = require('assert');
describe('Question 5', function() {
    it('test', function() {
        assert.equal(interest(100, 0, 4), 100);
        assert.equal(interest(100, 1, 4), 104);
        assert.equal(interest(100, 5, 4).toFixed(4), 121.6653);
        assert.equal(interest(100, 8, 3).toFixed(4), 126.677);
    });
});
