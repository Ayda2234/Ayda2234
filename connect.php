<?php
        $con = mysqli_connect('localhost','aida','foufouna200621302','web');
        if($con->connect_error){
             die ("echec de connexion");}
        else{
            echo ("connected with success");}
 ?>