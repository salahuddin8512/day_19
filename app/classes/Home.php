<?php


namespace App\classes;


class Home
{
    protected $number;
    protected $i;


    public function __construct($post=null)
    {
        $this->number = $post['given_number'];
    }

    public function index(){

        header('Location: action.php?pages=home');
    }
    public function primeNumber()
    {
        if ($this->number==1 || $this->number ==2)
        {
            return "Your Number $this->number is Prime";
        }
        else
        {
            for ($this->i = 2; $this->i<$this->number;$this->i++)
            {
                if ($this->number%$this->i==0)
                {
                    return "Your Number $this->number is not Prime";
                }
            }
            return "Your Number $this->number is Prime";
        }

    }
}