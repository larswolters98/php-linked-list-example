<?php

class Node
{
    public int $data;
    public self|null $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    public Node|null $head;

    public function __construct()
    {
        $this->head = null; // $this->head is the first node in the list
    }

    public function attachNode($data): void
    {
        $newNode = new Node($data);

        if ($this->head === null) { // If the head is null, then the list is empty -> add the node as the head
            $this->head = $newNode;
        } else {
            $current = $this->head;

            // While loop to the end of the list
            while ($current->next !== null) {
                $current = $current->next; // Move to the next node
            }

            $current->next = $newNode; // Set the next node to the new node
        }
    }

    public function displayList(): void
    {
        $currentNode = $this->head;

        // While the next node is not null, we are not at the end of the list
        while ($currentNode !== null) {
            echo $currentNode->data . "\n"; // Print the data of the current node
            $currentNode = $currentNode->next; // Move to the next node
        }
    }
}

$linkedList = new LinkedList(); // head = null

$linkedList->attachNode(1); // $this->head = null here, so this node is now the head
$linkedList->attachNode(2); // $this->head node is now set, so add new node to the end of the list
$linkedList->attachNode(3); // Repeat above

$linkedList->displayList(); // Show linked list