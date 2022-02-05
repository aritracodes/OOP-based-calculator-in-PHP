<?php
    
    declare(strict_types = 1);
    // require 'class-autoload.inc.php';
    require '../classes/calc.class.php';

    // if($_SERVER['REQUEST_METHOD'] == "POST"){
        $oper = $_POST["oper"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        
        
        
        $calc = new Calc($oper, (int)$num1, (int)$num2);
        
        try {
            echo $calc->calculator();
        } catch (TypeError $e) {
            echo " the error";
        }
        
        

        // echo var_dump($calc);
    
?>