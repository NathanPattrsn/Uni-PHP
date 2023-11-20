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
 * * left - The left-hand child
 * * right - The right-hand child
 */
function Node(id, label, left, right) {
    this.id = id;
    this.label = label;
    this.left = left;
    this.right = right;
}

/**
 * Add the parameter $node to the $log_data in order to
 * log the order in which the nodes are processed.
 */
var log_data = [];
function log_node(node) {
    log_data.push(node.id);
}

// StartStudentCode
function insert_node(node, new_node){
    if(new_node(id) < node(id)){
        if(node(left) == null){
            node(left) = new_node;
        } else{
            insert_node(node(left), new_node);
        }
    } else if(new_node(id) > node(id)){
        if(node(right) == null){
            node(right = new_node);
        }else{
            insert_node(node(right), new_node);
        }
    }
}

function find_node(needle, node){
    console.log("Visiting Node" . node(id) . "\n");
    if(needle == node(id)){
        return node;
    }else{
        if(needle < node(id)){
            if(node(left) == null){
                return null;
            }else{
                return find_node(needle, node(left));
            }
        }else if (needle > node(id)){
            if(node(right) == null){
                return null;
            }else{
                return find_node(needle, ndoe(right));
            }
        }
    }
}
// EndStudentCode

var assert = require('assert');
describe('Question 4', function() {
    it('test', function() {
        var tree = new Node(18, 'A', null, null);
        insert_node(tree, new Node(4, 'B', null, null));
        assert.equal(tree.left.id, 4);
        insert_node(tree, new Node(23, 'C', null, null));
        assert.equal(tree.right.id, 23);
        insert_node(tree, new Node(8, 'D', null, null));
        assert.equal(tree.left.right.id, 8);
        insert_node(tree, new Node(5, 'E', null, null));
        assert.equal(tree.left.right.left.id, 5);
        insert_node(tree, new Node(12, 'F', null, null));
        assert.equal(tree.left.right.right.id, 12);
        insert_node(tree, new Node(7, 'G', null, null));
        assert.equal(tree.left.right.left.right.id, 7);
        assert.equal(find_node(5, tree).label, 'E');
        assert.equal(log_data.length, 4);
        assert.equal(find_node(24, tree), null);
    });
});
