<?php
require 'first.php';
require 'second.php';

function just(){
    echo "This is statement is in function of third class";
}

use \first\ten\bha as f;
$obj=new f\test();
//$obj1=new second\test();
f\just();
?>