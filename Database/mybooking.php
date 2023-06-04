
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-8">
        <h1 class="m-4 text-uppercase text-center"><span style="color:rgb(255, 166, 0)">My </span>bookings
        </h1>
        <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Rooms</th>
                        <th scope="col">Adults</th>
                        <th scope="col">Children</th>
                        <th scope="col">Update</th>
                         <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../Database/config.php';
                    $sql = mysqli_query($conn, "SELECT * FROM `bookings`");   
                    while ($row = mysqli_fetch_array($sql)) {
                        echo "
                            <tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['startdate'] . "</td>
                                <td>" . $row['enddate'] . "</td>
                                <td>" . $row['room'] . "</td>
                                <td>" . $row['adult'] . "</td>
                                <td>" . $row['children'] . "</td>
                                
                                <td><a class='btn btn-warning' href='update.php? id=$row[id]'>Update</td>
                                <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Delete</td>
                                </tr>";

                    }
                    
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>