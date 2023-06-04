<?php
require '../Database/config.php';

if (isset($_POST["submit"])) {
    $startdate = $_POST["startdate"];
    $enddate = $_POST["enddate"];
    $room = $_POST["room"];
    $adult = $_POST["adult"];
    $children = $_POST["children"];
    $query = "INSERT INTO `bookings` (`startdate`, `enddate`, `room`, `adult` ,`children`) VALUES ('$startdate', '$enddate', '$room', '$adult','$children')";

    if (mysqli_query($conn, $query)) {
        echo "<script> alert('Record added successfully'); </script>";
        echo "<script>location.href='../Components/index.php'</script>";

    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking form</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>

<body>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-6 col-lg-6 col-xl-6=">
                    <img src="../img/booking.png" class="img-fluid" alt=" ">
                </div>
                        <div class="col-md-6 col-lg-6 col-xl-5 offset-xl-1">
                            <h1 class="m-4 text-uppercase text-center"><span style="color:rgb(255, 166, 0)">b</span>ook
                                <span style="color:rgb(255, 166, 0)">n</span>ow</h1>
                            <form action="" method="post" class="g-3">
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <p class="form-label mb-2">Check In</p>
                                        <input class="form-control" type="date" name="startdate" required>
                                    </div>
                                    <div class="col-sm-6 mt-3 mt-sm-0">
                                        <p class="form-label mb-2">Check Out</p>
                                        <input class="form-control" type="date" name="enddate" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <p class="form-label mb-2">Rooms</p>
                                        <select class="form-select" name="room">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mt-3 mt-sm-0">
                                        <p class="form-label mb-2">Adults</p>
                                        <select class="form-select" name="adult">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <p class="form-label mb-2">Children</p>
                                        <select class="form-select" name="children">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <button style="background-color:#1a626e;color:aliceblue" type="submit"
                                            class="btn mt-3 form-control" name="submit" >Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>

            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>