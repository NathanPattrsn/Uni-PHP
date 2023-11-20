// ##################################################################
// # Do NOT edit any of the lines before the "// StartStudentCode"  #
// # line or after the "// EndStudentCode line. Do not remove those #
// # two lines.                                                     #
// #                                                                #
// # If you do edit any of the other code, your submission will     #
// # probably not work.                                             #
// ##################################################################

/**
 * Node class represents a single node in a tree.
 *
 * It has three properties:
 * * id - Sort-order identifier
 * * label - The label
 * * children - List of children
 */
function Node (id, label, children) {
    this.id = id;
    this.label = label;
    this.children = children;
}

var log_data = [];

/**
 * Add the parameter node to the log_data in order to
 * log the order in which the nodes are processed.
 */
function log_node(node) {
    log_data.push(node.id);
}

// StartStudentCode
function breadth_first(needle, node){
    unvisited = [node];
    while(count(unvisited) > 0){
        current = unvisited[0];
        console.log("Visiting Node " . $current->label . "\n");
        unvisited = array_slice(unvisited, 1);
        if (needle == current->id){
            return current;
        }
        for(idx = 0; idx < count(current -> children); idx++){
            unvisited[] = current-> children[idx];
        }
    }
}
console.log(tree);
console.log("Found id 42 at node " . breadth_first(42, tree)-> label . "\n");
// EndStudentCode

var assert = require('assert');
describe('Question 2', function() {
    it('test', function() {
        var tree = new Node(87, 'A', [
            new Node(18, 'B', [
                new Node(1, 'C', []),
                new Node(2, 'D', [])
            ]),
            new Node(43, 'E', [
                new Node(23, 'F', []),
                new Node(42, 'G', [])
            ])
        ]);
        assert.equal(breadth_first(2, tree).label, 'D');
        assert.deepEqual(log_data, [87, 18, 43, 1, 2]);
        log_data = [];
        assert.equal(breadth_first(16, tree), null);
        assert.deepEqual(log_data, [87, 18, 43, 1, 2, 23, 42]);
    });
});
