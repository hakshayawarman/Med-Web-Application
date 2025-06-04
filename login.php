<?php

include 'connect.php';

if($_POST['submit']){
    $name=$_POST['username'];
    $password=$_POST['password'];
    


    $sql="insert into login(username,password) values ('$name','$password')";

    $run =mysqli_query($conn,$sql) or die (mysqli_error());
 
    if($run){

        header("location:hm.php");
    }else{

        echo "please check your queries";
    }

    


}

?>`