<?php
    $Server = "localhost";
    $User = "root";
    $Password = "";
    $BD = "ControlVehicular31";
    
    $Conexion = mysqli_connect($Server, $User, $Password, $BD);

    $info_host = mysqli_host_info($Conexion);
    print("Información del host: " . $info_host);
        
    mysqli_close($Conexion);
?>