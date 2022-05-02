<?php
    include "myconnection.php";
    
    $name = $_POST["myname"];
    $foto = $_FILES['myfoto']['name'];
    $tmp = $_FILES['myfoto']['tmp_name'];
    $address = $_POST["myaddress"];
    $target = "gambar/";
    
    move_uploaded_file($tmp, $target . $foto);
    
    $query = "INSERT INTO student(name, address, foto) 
            VALUE('$name', '$address', '$foto')";

    if(mysqli_query($connect, $query)) {
        echo "Data baru berhasil ditambahkan";
    } else {
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }
    
    mysqli_close($connect);
?>