<?php

use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    /**
     * Test if the last node of the list is the last added node.
     */
    public function test_the_last_node_of_the_linked_list_is_the_last_added_node(): void
    {
        $linkedList = new LinkedList();

        $linkedList->attachNode(5); // head
        $linkedList->attachNode(10); // next
        $linkedList->attachNode(15); // next

        $this->assertEquals(15, $linkedList->head->next->next->data);
    }

    /**
     * Test if the head of the list is the first added node.
     */
    public function test_the_head_of_the_list_is_the_first_added_node(): void
    {
        $linkedList = new LinkedList();

        $linkedList->attachNode(5); // head
        $linkedList->attachNode(10); // next
        $linkedList->attachNode(15); // next

        $this->assertEquals(5, $linkedList->head->data);
    }
}