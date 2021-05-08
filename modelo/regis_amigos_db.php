<?php
    $servername = "127.0.0.1";
    $database = "prueba_gr";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    echo "Connected successfully";
    
    $user = 1;
    $nombre = $_POST["nombre"];   
    $email = $_POST["email"];   
    $fecha = date("d-m-Y");   

    $sql = "INSERT INTO amigos (id_usuario,nombre_usuario,correo_electronico,fecha) VALUES ('$user','$nombre','$email','$fecha')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>