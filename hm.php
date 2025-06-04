
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
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
  
    <?php

include "navbar.php";
include "connect.php";

?>

  <table class="table">
    <thead>
        <td>id</td>
        <td>username</td>
        <td>email</td>
        <td>age</td>
        <td>address</td>
</thead>
  <?php

    $sql="SELECT*FROM username";
    $result=mysqli_query($conn,$sql);
    if($result) {while ($row=mysqli_fetch_assoc($result)){ 

    $id=$row['ID'];
    $name=$row['username'];
    $email=$row['email'];
    $age=$row['age'];
    $address=$row['address'];
    
    echo '<tbody>
    <tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$age.'</td>
        <td>'.$address.'</td>
        <td><a href="update.php?update='.$id.'">update</a> </td>
          <td><a href="delete.php?delete='.$id.'">delete</a> </td>


    </tr>




    </tbody>';

 }

}
?>

</table>


</body>
  
</html>
