<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>LinkedList</h2>");
print("<h2>Homework_2</h2><br>");

class Node {
    /** @var int */
    private $data;
    /** @var Node */ 
    private $next; 
   	
    /**
    * Constructor Node class
    */
    public function __construct($data = 0, $next = null)  // default value of $data is 0, $next is null
    {
        $this->data = $data; // initial $data
        $this->next = $next;  // initial $next
    }

    /**
    * get data
    * @return int
    */
    public function getData()
    {
        return $this->data;
    }

    /**
    * set data
    * @param int $data
    */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
    * get next
    * @return Node
    */
    public function getNext()
    {
        return $this->next;
    }

    /**
    * set next
    * @param Node $next
    */
    public function setNext($next)
    {
        $this->next = $next;
    }
    
} 

class LinkedList { 
    /** @var Node  head node */
    private $head;
    
	/**
    *@param int $data
    */
    
    public function insert($data)
    {
        $newNode = new Node($data); // create a Node
        if ($this->head == null) {
            // if the head is null, that mean linked list is empty, so the first node is head
            $this->head = $newNode;
        } else {
            // if linked list is not null, new node will be add to end of list
            // find the last node
            $last = $this->head; 
            while ($last->getNext() != null) { 
                $last = $last->getNext();
            }
            // insert new node to at last node
            $last->setNext($newNode);
        }
    }
    
	public function delete($data)
	{
	    if ($this->head == null) { // linked list is empty
	        echo "List is empty.";
	        return;
	    }
    
    	$current = $this->head;
        while ($current != null) { // head is $data
            if ($current->getData() == $data) { // found node
            	if($this->head == $current){
                	$this->head = $current->getNext();
                }
                $current=$current->getNext();
            }
            else{
            	break;
            }
        }
        
		// when all the nodes are deleted.
		$current = $this->head;
		if($current == null){
			echo "enter<br>";
			echo "Non Linked List<br>";
			return;
		}
		
		else{
			while($current->getNext() != null){
				while($current->getNext()->getData() == $data){
					$current->setNext($current->getNext()->getNext());
					if($current->getNext()==null){
						break;
					}
				}
				$current=$current->getNext();
				if($current==null){
					return;
				}
			}
			
			if($current !=null && $current->getData()==$data){
				$current->getNext=null;
			}
			return;
        }
        
	}

    /**
    * traversal linked list
    */
    public function visit()
    {
        $currNode = $this->head; // start from head node

        echo "Linked List: ";

        while ($currNode != null) {
            echo $currNode->getData() . " ";
            $currNode = $currNode->getNext();
        }
    }
    
    public function print_reverse($node){
    	if($node===$this){
    		$node=$this->head;
    		print("Reversed Order: ");
    	}
    	if($node==null){
    		return;
    	}
    	$this->print_reverse($node->getNext());
    	print($node->getData()." ");
    }
}

$list = new LinkedList(); // init linked list: $head = null
$list->insert(1);
$list->insert(2);
$list->insert(3);
$list->insert(4);
$list->insert(5);
$list->insert(6);
$list->insert(7);
$list->insert(8);
$list->insert(9);
$list->insert(10);

//$list->visit(); // visit linked list

$list->visit();
print("<br>");
$list->print_reverse($list);
print("<br>");

?>
</body>
</html>
