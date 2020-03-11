<?php
session_start();
?>

<?php
    $mail=$_POST["email"];
    $pass=$_POST["pass"];

    include ("../model/funciones.php");
    $rob=new consul();
    $iniciar=$rob->login($mail, $pass);

    foreach($iniciar as $row){
        $rol = $row['rol'];
    }

    if(sizeof($iniciar)>0){
    $_SESSION['login'] = true;
    $_SESSION['email'] = $mail;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (600);//tiempo de 600segundos por sesion
    
        if($rol == "1"){
            //$_SESSION['rol'] = $rol;
            header("location: ../view/admin/index_admin.php");
    }else if($rol == "0"){
        //$_SESSION['rol'] = $rol;
        header("location: ../view/usuario/index_usuario.php");
    }
    else if($rol == "ADMINISTRADOR"){
        //$_SESSION['rol'] = $rol;
        header("location: ../inicioAdmin");
    }
    else if($rol == "EMPLEADO"){
        //$_SESSION['rol'] = $rol;
        header("location: ../inicioUsuario");
    }
}else{
    echo'<script type="text/javascript">
    alert("Usuario y/o contraseña incorrectos");
    window.location.href="../";
    </script>';
}
    
?>