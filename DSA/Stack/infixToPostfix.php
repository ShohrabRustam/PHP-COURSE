<?php
// Infix to postfix conversion
// Stack node
class StackNode
{
    // Stack data
    public $element;
    public $next;
    public    function __construct($element)
    {
        $this->element = $element;
        $this->next = null;
    }
}

// Stack
class MyStack
{
    public $top;
    public $size;
    public    function __construct()
    {
        $this->top = NULL;
        $this->size = 0;
    }
    // Add node at the top of stack
    public    function push($element)
    {
        $newNode = new StackNode($element);
        if ($this->top = null) {
            $this->top = $newNode;
        } else {
            $newNode->next = $this->top;
            $this->top = $newNode;
        }
        $this->size++;
    }

    //Check the stack is Empty or Not 
    public    function isEmpty()
    {
        // condition for check  the stack is not empty 
        if ($this->size > 0 && $this->top != NULL) {
            return false;
        } else {
            return true;
        }
    }

    // Remove top element of stack which is head / top 
    public    function pop()
    {
        if ($this->size > 0 && $this->top != NULL) {
            $temp = $this->top;
            // Change top element of stack
            $this->top = $temp->next;
            $this->size--;
            return $temp;
        } else {
            return -1;
        }
    }

    // Return top element of stack it means last entered element 
    public    function peek()
    {
        if ($this->top == NULL) {
            return 'Stack is empty ';
        }
        return $this->top->element;
    }
}

//Class for Conversion to check precedence and is it operator or not  
class Conversion
{
    public function precedence($string)
    {
        if ($string == '+' || $string == '-') {
            return 1;
        } else if ($string == '*' || $string == '/') {
            return 2;
        } else if ($string == '^') {
            return 3;
        }
        return -1;
    }

    // check is it operator or not if operator give true else false 
    public    function is_operator($string)
    {
        if (
            $string == '+' || $string == '-' ||
            $string == '*' || $string == '/' || $string == '^'
) 
        {
            return true;
        }
        return false;
    }
}

// Converting the given infix expression to postfix expression
class infixToPostfix
{
    public function infixtoPostfix($infixString)
    {
        // create empty result to store result 
        $result = "";

       // Get the size of the given infix string 
        $size = strlen($infixString);

       // Create empty stack 
        $s = new MyStack();

       //traverse all the string contain all the character not operator store in result variable 
        for ($i = 0; $i < $size; ++$i) {
       //if infix contain number or char a-z,A-Z,0-9 only  
            if (($infixString[$i] >= '0' && $infixString[$i] <= '9') ||
                ($infixString[$i] >= 'a' && $infixString[$i] <= 'z') ||
                ($infixString[$i] >= 'A' && $infixString[$i] <= 'Z'))
             {
                // When store all the characher which contain 0-9 , a-z , A-Z
                $result = $result . strval($infixString[$i]); // all the char contain in result 
            }
            else {
                // if stack is empty or contain '(' or operator push inside the stack
                if ($s->isEmpty() || $infixString[$i] == '(')
                {
                     // When getting a open parenthesis
                    $s->push($infixString[$i]);
                } 
                else if ($infixString[$i] == ')')
                 {
                   // Need to remove stack element until the close bracket
                    while (    $s->isEmpty() == false && $s->peek() != '(') 
                    {
                       // Get top element at last of the result (operator)
                            $result .= $s->peek();

                       // Remove stack element
                             $s->pop();

                    }
                    if ($s->peek() == '(') 
                    {
                     // Remove stack element
                        $s->pop();
                    }
                    }
                     else {
                    // Remove stack element until precedence of 
                    // top is greater than current infix operator
                    while (
                        $s->isEmpty() == false &&
                        Conversion ::precedence($infixString[$i]) <=
                        Conversion::precedence($s->peek())
                    ) {
                          // Get top element
                        $result .= $s->peek();
                         // Remove stack element
                        $s->pop();
                    }
                       // Add new operator
                    $s->push($infixString[$i]);
                }
            }
        }
            // Add remaining elements
        while ($s->isEmpty() == false) {
//             $result .= $s->peek();
            $s->pop();
        }
            // Display result
        printf("%s\n", " Infix    : " . $infixString);
        printf("%s\n", " Postfix  : " . $result);
    }
}
$infixtopost=new infixToPostfix();
$infixtopost->infixtoPostfix("x+y*(a+b)");
?>
