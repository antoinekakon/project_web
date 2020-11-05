<?php
    class Calculator{
        
        public $count;

        function __construct(){
            $this->count = 0;
        }

        function print(){
            echo "Compteur : ". $this->count;
        }
        
        function counter(){
            return $this->count++;
        }

    }
  
    $init = new Calculator();
    $init->counter();
    $init->print();
    echo "<br>";
    echo "<span>Compteur : ".$init->count."</span>";
?>
    

