<?php
    include('functions.php');
    session_start(); 
   
    
    $id = "0";

    $query = "select * from `enterceo` where `requests`.`id` = '$id'; ";

    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
           
            $email = $row['email'];
            $projectname = $row['projectname'];
            $abstract = $row['abstract'];
            $share = $_row['share'];
                $amount = $_row['amount'];
                $goals = $_row['goals'];

                $query = "INSERT INTO `final` ( `email`, `projectname`, `abstract`, `share`, `amount`, `goals`) VALUES (  '$email', '$projectname', '$abstract', '$share', '$amount', '$goals' )";

            
        }
        $query .= "DELETE FROM `enterceo` WHERE `enterceo`.`email` = '$email';";
        if(performQuery($query)){
            echo "Account has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }
    
?>
<br/><br/>
<a href="home.php">Back to DashBoard</a>
