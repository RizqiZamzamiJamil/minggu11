<?php
    include "myconnection.php";

    $name = $_POST["myname"];
    $address = $_POST["myaddress"];

    $query = "UPDATE student SET name='$name', address='$address' WHERE id=$id";
    
    if(mysqli_query($connect, $query)) {
        header('Location:homeCRUD.php');
    } else {
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }
    
    mysqli_close($connect);
?>