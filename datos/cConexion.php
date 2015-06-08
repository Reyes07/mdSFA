<?php
define("SERVIDOR","localhost");
define("USUARIO","root");
define("CLAVE","");
define("BD","sfa");
$limit = 1;
$adjacent = 3;
class cConexion
{
//atributo que contiene la cadena de conexion

private $conex;

//metodos 
//metodo que se encarga de hacer la conexion con la base de datos
public function conectar()
{

if (!isset($this->conex))
{
//include("config.php");
$this->conex=new mysqli("localhost","root","","sfa");
if ($this->conex->connect_error)
			{
				printf ("Conexion Fallo: %s/n",$this->conex->connect_error);
				exit();
			}
	}
}
	
	public function consulta($transaccion)
	{
		if(!$resultado=$this->conex->query($transaccion))
		{
			echo "Fallo en SQL:(".$this->conex->connect_error.")";
		}
		return $resultado;
	}
	
	public function fetch_array($resultado)
	{
		
		return $resultado->fetch_array(MYSQLI_ASSOC);
	}
	
	public function desconectar()
	{
		$this->conex->close();
	}
	
	public function num_rows($resultado)
	{
	return $resultado->num_rows;
	}
}
//fin de la clase
?>