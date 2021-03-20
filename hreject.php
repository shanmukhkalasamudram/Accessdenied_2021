<?php
    include('functions.php');
    
    
    $id = "0";

    
    $query = "DELETE FROM `enterhr` WHERE `enterhr`.`id` = '0' ";
        if(performQuery($query)){
            echo "Account has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<br/><br/>
<a href="home.php">Back To dashboard</a>