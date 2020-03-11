<?php
include 'conexion.php';
class consul{
    private $db;//database
    private $lista;
    private $prov;
    private $tbl;

    

    public function __construct(){
        $this->db=conexion::con();
         $this->lista=array();
    }

    public function cons_usuarios(){
        $col=$this->db->query("SELECT * FROM usuario");
        while($filas=$col->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
        }

    public function login($mail,$pass){
        $consulta=$this->db->query("SELECT * FROM usuario WHERE email='$mail' AND contrasena='$pass'");
        while($filas=$consulta->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
    }

    public function usuario_cons($id_col){
        $cols=$this->db->query("SELECT * FROM usuario WHERE id_usuario ='$id_col'");
        while($filas=$cols->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
        }
		
public function edit_usuarios($id_col,$nombre,$apellido,$numempleado,$correo,$contrasena,$rol){
            $usuario=$this->db->query("UPDATE usuario set  nombre='$nombre',apellido='$apellido',numero_empleado='$numempleado',email='$correo',contrasena='$contrasena',rol='$rol' WHERE id_usuario='$id_col'");
            echo '<script type="text/javascript">'; 
            echo 'alert("Modificacion exitosa");'; 
            echo 'window.location.href = "consul_admin";';
            echo '</script>';
            }
     

    public function registro_usuarios($nombre,$apellido,$numempleado,$correo,$contrasena,$rol){
            $usuarios=$this->db->query("INSERT INTO usuario (nombre,apellido,numero_empleado,email,contrasena,rol)VALUES ('$nombre','$apellido','$numempleado','$correo','$contrasena','$rol')");
            echo '<script type="text/javascript">'; 
            echo 'alert("Usuario registrado correctamente");'; 
            echo 'window.location.href = "consul_admin";';
            echo '</script>';
        
    }

    public function del_usuario($id){
   
        $usuario=$this->db->query("DELETE FROM usuario WHERE Id_usuario ='$id'");
        echo '<script type="text/javascript">'; 
        echo 'alert("Usuario eliminado correctamente");'; 
        echo 'window.location.href = "consul_admin";';
        echo '</script>';
    }
	
	
	
	
	
	
	public function cons_DEMERITOS(){
        $col=$this->db->query("SELECT * FROM demeritos");
        while($filas=$col->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
        }

     public function demerito_cons($id_col){
        $cols=$this->db->query("SELECT * FROM demeritos WHERE id_demerito ='$id_col'");
        while($filas=$cols->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
        }
public function edit_demerito($id_col,$mes,$fecha,$No_carroceria,$modelo,$segmento,$no_conformidad,$componente,$complemento){
            $usuario=$this->db->query("UPDATE demeritos set  mes='$mes',fecha='$fecha',No_carroceria='$No_carroceria',modelo='$modelo',segmento='$segmento',no_conformidad='$no_conformidad',componente='$componente',complemento='$complemento' WHERE id_demerito='$id_col'");
            echo '<script type="text/javascript">'; 
            echo 'alert("Modificacion exitosa");'; 
            echo 'window.location.href = "consul_DEM";';
            echo '</script>';
            }
			
    public function del_DEMERITO($id){
   
        $usuario=$this->db->query("DELETE FROM demeritos WHERE Id_demerito ='$id'");
        echo '<script type="text/javascript">'; 
        echo 'alert("Demerito eliminado correctamente");'; 
        echo 'window.location.href = "consul_DEM";';
        echo '</script>';
    }

}


?>