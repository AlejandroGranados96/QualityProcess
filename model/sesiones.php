<?php
session_start();//inicio de sesion
if(isset($_SESSION['login']) && $_SESSION['login']== true){
//si la sesion es correcta la pagina sige sin problema
}
else{
    header("Location: index");//si no inicia sesion se re-dirige al index
}
$now = time();//variable por tiempo

if($now > $_SESSION['expire']){
    session_destroy();
    echo'<script type="text/javascript">
						alert("Su sesión ha expirado, Ingrese nuevamente");
						window.location.href="index";
                        </script>';
                        exit;
}
?>