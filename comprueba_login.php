<?php 

try {
    
    $base = new PDO("mysql:host=localhost; dbname=solicitudes", "root", "");

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM usuarios WHERE CEDULA = :usuario AND PASSWORDR= :passwordr";

    $resultado=$base->prepare($sql);

    $usuario=htmlentities(addslashes($_POST["usuario"]));
    $passwordr=htmlentities(addslashes($_POST["passwordr"]));

    $resultado->bindValue(":usuario", $usuario);
    $resultado->bindValue(":passwordr", $passwordr);

    $resultado->execute();

    $numero_registro=$resultado->rowCount();

    echo $numero_registro;

    if($numero_registro!=0){
        session_start();
        $_SESSION["usuario"]=$_POST["usuario"];
        $_SESSION["registro"]=$numero_registro;
        header("location:dashboard.php");
    }else {
        header("location:registro.php");
    }
    return $numero_registro;

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

?>