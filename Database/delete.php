<?php
    include 'config.php';
    $id=$_GET['id'];
    $delete_query="DELETE FROM `bookings` WHERE id='$id'";
    if(mysqli_query($conn,$delete_query)){
    echo "<script>'alert('Deleted Suceccfully!!')'</script>";
    header("location:mybooking.php");
    }
    else{
    echo "<script>'alert('Not Deleted !!')'</script>";
    }?>
