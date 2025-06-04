<?php 
$conn=new mysqli('localhost','root','','admin');

if($conn){

    //echo "connected";

}else{
    die(mysqli_error($conn));
}
?>

