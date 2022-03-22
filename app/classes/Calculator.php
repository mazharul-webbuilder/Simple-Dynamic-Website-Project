<?php


namespace App\classes;


class Calculator
{
    public $firstNumber;
    public $lastNumber;
    public $action;

    public function __construct($post = null)
    {
        $this->firstNumber = $post['first_number'];
        $this->lastNumber  = $post['last_number'];
        $this->action      = $post['action'];
    }

    public function myCalculator()
    {
        switch ($this->action)
        {
            case '+':
                return $this->firstNumber + $this->lastNumber;
                break;
            case '-':
                return $this->firstNumber - $this->lastNumber;
                break;
            case '*':
                return $this->firstNumber * $this->lastNumber;
                break;
            case '/':
                return $this->firstNumber / $this->lastNumber;
                break;
            case '%':
                return $this->firstNumber % $this->lastNumber;
                break;
        }
    }


}