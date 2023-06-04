<?php
include '../Database/config.php';
if (isset($_POST['submit'])) {
$email= $_POST['email'];
$password=$_POST['password'];
$result=mysqli_query($conn, "SELECT * FROM `register` WHERE email='$email' And password='$password'");
if (mysqli_num_rows($result)){
session_start();
$_SESSION['email']=$email;
echo "<script>location.href='../Components/index.php'</script>";
}
else{
echo "<script> alert('Email and password is incorrect')</script>";
echo "<script>location.href='login.php'</script>";
}}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="../img/loginF.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h1 class="m-5 text-uppercase text-center"><span style="color:#1a626e">login</span> now
                    </h1>

                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <input style="background-color:#1a626e;color:aliceblue" type="submit"
                            class="btn mt-3 form-control" type="submit" class="btn btn-primary mt-3 form-control"
                            name="submit" value="Login">

                        <p class="text-center text-muted mt-3 mb-5">Don't have an account? <a
                                href="../Database/register.php" class="fw-bold text-body"><u
                                    style="color:#1a626e">Register here</u></a></p>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>