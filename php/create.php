<?php

$conexion = mysqli_connect("localhost", "u994790878_estudiantesweb", "Politecnico0547@", "kevin")
or die(mysqli_error($conexion));
co
insertar($conexion);

function insertar($conexion){
    $telefono = $_POST['telefono'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $confirmarContrasena = $_POST['confirmarContrasena'];
    
    $consulta = "INSERT INTO kevin(`telefono`, `usuario`, `contrasena`, `confirmarContrasena`) VALUES ('$telefono','$usuario','$contrasena','$confirmarContrasena')";
    // $consulta = "INSERT INTO datos(nombre, usuario, contrasena) VALUES ('$name','$usuario','$contrasena')";
    header("Location: ../login.html ");
    mysqli_query($conexion, $consulta);


    mysqli_close($conexion);
}
?>