# Inefficient Multidimensional Array Flattening in PHP

This repository contains a PHP function designed to flatten a multi-dimensional array.  The original implementation can suffer from performance issues, particularly with deeply nested arrays, due to its recursive nature.  A more efficient iterative solution is also provided.

## Bug Description

The `foo()` function uses recursion to flatten the array. While functional for smaller arrays, this approach can lead to stack overflow errors when processing large or deeply nested arrays.  PHP's default recursion depth limit can be exceeded.

## Solution

The improved solution uses an iterative approach with a stack or queue data structure which avoids recursion completely, improving performance significantly. This approach significantly reduces the risk of stack overflow errors, handling larger and deeper arrays more gracefully.

## How to Run

1.  Clone this repository.
2.  Run the `bug.php` file to see the original inefficient function in action.  For very deep arrays, you'll likely hit the recursion limit.
3.  Run the `bugSolution.php` file to see the improved iterative solution which handles deep arrays effectively.