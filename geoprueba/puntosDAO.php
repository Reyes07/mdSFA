<?php
include_once '../datos/cConexion.php';//INCLUIR CONEXION DE BASE DE DATOS
 $con=null;
class puntosDao
{
    private $r;
    $con;

    public function __construct()
    {
        $this->r = array();        
        $con = new cConexion();
    }
    public function grabar($titulo, $cx,$cy)//METODO PARA GRABAR A LA BD
    {

        $con = new cConexion();
        $con = $conex->conectar();

        $titulo = mysqli_real_escape_string()($titulo);
        $cx = mysqli_real_escape_string($cx);
        $cy = mysqli_real_escape_string($cy);
        $q = "insert into zona (nombre, latitud, longitud)".
             "values ('".addslashes($titulo)."','".addslashes($cx)."','".addslashes($cy)."')";
        $rpta = $con->consulta($q);
        echo $q;
        $con->desconectar();
        if($rpta==1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    public function listar_todo()
    {
        $q = "select * from zona ";

        $con = new cConexion();
        $con->conectar();
        $rpta = $con->consulta($q);
       $con->desconectar();
        while($fila = $con->fetch_array($rpta))
        {
            $this->r[] = $fila;
        }
        return $this->r;
    }
    public function borrar($idPunto)//METODO PARA BORRAR DE LA BD
    {
        $con->conectar();

        $con = new cConexion();
        $idPunto = mysqli_real_escape_string($idPunto);
        $q = "delete from zona where Id_zona = ".(int)$idPunto;
        $rpta = $con->consulta($q);
        $con->desconectar();
        if($rpta==1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    public function actualizar($Id, $titulo, $cx,$cy)//METODO PARA ACTUALIZAR A LA BD
    {
        
        $con = new cConexion();
        $con->conectar();
        $Id = mysqli_real_escape_string($Id);
        $titulo = mysqli_real_escape_string($titulo);
        $cx = mysqli_real_escape_string($cx);
        $cy = mysqli_real_escape_string($cy);
        $q = "update puntos zona nombre='".$titulo."', latitud='".$cx."' , longitud ='".$cy."' where Id_zona =".$Id;
        $rpta = $con->consulta($q);
       $con->desconectar();
        if($rpta==1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}
?>