<?php
include_once('node.php');

class LinkList
{
    private $firstNode;
    private $lasteNode;
    private $count;

    function __construct()
    {
        $this->firstNode = NULL;
        $this->lasteNode = NULL;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lasteNode == NULL)
            $this->lasteNode = $link;
        $this->count++;
        if ($this->lasteNode == NULL) {
            $this->lasteNode = $link;
        }
    }

    public function insertLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;

        while($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}