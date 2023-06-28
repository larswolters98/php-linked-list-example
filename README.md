## PHP linked list example

This is a simple example of a [linked list](https://nl.wikipedia.org/wiki/Gelinkte_lijst) in PHP. It is not intended to be used in production, but rather to demonstrate 
the concept of a linked list. A linked list is a data structure that consists of a group of nodes that together represent
a sequence.

Since arrays exist in PHP, there is no need to implement a linked list in PHP. However, for example in the [C
programming language](https://en.wikipedia.org/wiki/C_(programming_language)), linked lists are useful because arrays are not built in.

The major difference between an array and a linked list is their structure. An array is an index-based data structure 
where each element is associated with an index. On the other hand, a linked list relies on references where each node consists
of the data and the references to the previous and next element.

## Installation

1. Clone this repository & run `composer install`
2. Run `php index.php` to see the output of the linked list

## Testing

To run tests, run `./vendor/bin/phpunit tests` in the root directory.
