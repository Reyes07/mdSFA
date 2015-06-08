<?php

include_once("cConexion.php");

class cEstatus
{
//Definicion de atributos
private $status;
private $descripcion;

private $con;//Variable para la conexion a la BD

//Metodo Constructor

public function __construct ($args)
{
	$cantidad=sizeof($args);
	switch($cantidad){
		
		case 2:
		$this->status=$args[0];
		$this->descripcion=$args[1];
		break;
		case 1:
		$this->status=$args[0];
		break;
	}
}

//getters


public function getstatus()
{
	return $this->status;
}
public function getdescripcion()
{
	return $this->descripcion;
}

//setters

public function setstatus($valor)
{
	$this->status = $valor;
}
public function setdescripcion($valor)
{
	$this->descripcion = $valor;
}

public function guardar(){
	$this->con= new cConexion();
	$this->con->conectar();
	$sql="call insertar_estatus(";	
	$sql.="'".$this->status."',";
	$sql.="'".$this->descripcion."');";
	//echo $sql;
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}

//Operaciones CRUD
public function modificar()
{

	$this->con= new cConexion();
	$this->con->conectar();
	$sql="call update_estatus(";	
	$sql.="'".$this->status."',";
	$sql.="'".$this->descripcion."');";
	//echo $sql;
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;

}
/*public function restaurar()
{

$this->con= new cConexion();
	$this->con->conectar();
	$sql="call restaurarestatus('".$this->status."');";
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}*/
public function eliminar()
{

$this->con= new cConexion();
	$this->con->conectar();
	$sql="call borrar_estatus('".$this->status."');";
	//echo $sql;	
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}


public function listarEstatus($query){
	//si queremos paginar
		
	//*****
		$this->con= new cConexion();
		$this->con->conectar();
		$tabla=$this->con->consulta($query);
		$lista=array(); //creamos un arreglo
		if($this->con->num_rows($tabla)>0){
			while($fila=$this->con->fetch_array($tabla)){
				$tmp=new cEstatus(array($fila["status"],$fila["descripcion"]));
				array_push($lista,$tmp);		
			}
		}
		$this->con->desconectar();
		return $lista;
	}

}