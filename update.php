<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 


    
<div><center> <h1><B>STUDENT<B></h1></center></div><br><br>
<center>
    <form method="POST">
      
        <div class="card" style="width: 20rem;">
          <label for="exampleInputPassword1">User name</label>
          <input type="text" name="username" class="form-control" id="username" placeholder="User Name" >
        </div>

       
        <div class="card" style="width: 20rem;">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div><br><br>

        <div class="card" style="width: 20rem;">
          <label for="exampleInputPassword1">Age</label>
          <input type="text" name="age" class="form-control" id="age" placeholder="Age" >
        </div>

        <div class="card" style="width: 20rem;">
          <label for="exampleInputPassword1">Address</label>
          <input type="text" name="address" class="form-control" id="address" placeholder="Address" >
        </div>

        <br><br>
       <div>
        <input type="submit" class="btn btn-primary" value="submit" name="submit">
       </div>
      </form>
</div>
</center>


<?php
    include 'connect.php';
    $id=$_GET['update'];
    if (isset($_POST['submit'])){
     
        $name=$_POST['username'];
        $email=$_POST['email'];
        $address=$_POST['address'];

        $sql="UPDATE username set id=$id,username='$name',email='$email',address='$address' where id=$id";

        $run= mysqli_query($conn,$sql);

        if($run){
            header("location:hm.php");

        }else {
            echo "please check again";
        }

    }


?>

</body>
    

</html>