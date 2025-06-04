<?php

include 'connect.php';
if(isset($_POST['submit'])){

$name=$_POST["fullname"];
$dep=$_POST["department"];
$email=$_POST["email"];
$pnumber=$_POST["pnumber"];
$password=$_POST["password"];


$sql="INSERT INTO `registerdoctor`(`fullname`, `department`, `pnumber`, `email`, `password`) VALUES 
('$name','$dep','$pnumber','$email','$password')"; 


$run=mysqli_query($conn,$sql) or die(mysqli_error());

if($run)
{
    header("location:patient details.php");
}
else{
    echo "error";
}
}

?>






<!doctype html>
<html lang="en">
  <head>
    <title>DOCTOR REGISTRATION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
</head>
  <body>
      
  

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">HEALTH CARE CLINIC<BR>DOCTOR REGISTRATION</h4>
                </div>

                <form action="" method="POST">
                 

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="fullname" id="form2Example11" class="form-control"
                      placeholder="Full Name" />
                    <label class="form-label" for="form2Example11" >Full name</label>
                  </div>

                
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="department" id="form2Example11" class="form-control"
                      placeholder="Department Name" />
                    <label class="form-label" for="form2Example11" >Department</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="int" name="pnumber" id="form2Example11" class="form-control"
                      placeholder="Phone number" />
                    <label class="form-label" for="form2Example11" >Telephone no</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Email" />
                    <label class="form-label" for="form2Example11" >Email</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password"  name="password" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>


                  <div class="text-center pt-1 mb-5 pb-1">
                    <button  data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"  type="submit" name="submit">Register
                      </button>
                  </div>
                  

                  <div class="d-flex align-items-center justify-content-center pb-4">
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Welcome Back!</h4>
                <p class="small mb-0">

                  Join Us Today!

Create your account to unlock easy access to our services, schedule appointments, and manage your health information all in one place. Signing up is quick and simple, setting you on the path to a more personalized and convenient healthcare experience.
Start now and take control of your health journey!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  </body>
</html>