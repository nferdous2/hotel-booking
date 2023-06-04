<?php
require '../Database/config.php';
if(!empty($_SESSION["id"])){
  header("Location: ../Components/index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpass"];
  $duplicate = mysqli_query($conn, "SELECT * FROM `register`  WHERE name = '$name' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('name or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO register VALUES('','$name','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      echo "<script>location.href='../Components/index.php'</script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">


</head>

<body>

<section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="../img/loginF.png" class="img-fluid" alt=" ">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <h1 class="m-5 text-uppercase text-center"><span style="color:rgb(255, 166, 0)">r</span>egister</h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="confirmpass" placeholder="Confirm Password">
                    </div>
                    <input  style="background-color:#1a626e;color:aliceblue" type="submit" class="btn mt-3 form-control" name="submit" value="Register">

                    <p class="text-center text-muted mt-3 mb-5">Have already an account? <a  href="../Components/Login.php" class="fw-bold text-body"><u style="color:#1a626e">Login here</u></a></p>
                </form>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>