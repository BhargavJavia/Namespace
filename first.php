<?php
    namespace first\ten\bha;
    class test{
        public function __construct()
        {
            //echo "This is first class<br>";
            $test=new \second\test;
        }           
    }
    function just(){
        echo "This is statement is in function of first class";
    }
?>