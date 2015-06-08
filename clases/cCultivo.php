<?php

include_once('../datos/Cconexion.php');

 class cCultivo{

  private $Id_cultivo;
  private $nombre;
  private $direccion;
  private $HR;
  private $pre_pluvial;
  private $tempMax;
  private $tempMin;
  private $tempRecomendada;
  private $status;
  private $con;

  public function __construct($args)
  {
         $cantidad=sizeof($args);
	 		switch ($cantidad) {
	 			case 1:
	 				$this->Id_cultivo=$args[0];
	 				break;
	 			
	 			case 7://para guardar

	 				$this->nombre=$args[0];
	 				$this->direccion=$args[1];
	 				$this->HR=$args[2];
	 				$this->pre_pluvial=$args[3];
	 				$this->tempMax=$args[4];
	 				$this->tempMin=$args[5];
	 				$this->tempRecomendada=$args[6];
	 				break;

	 			case 9:
          $this->Id_cultivo=$args[0];
	 			  $this->nombre=$args[1];
	 				$this->direccion=$args[2];
	 				$this->HR=$args[3];
	 				$this->pre_pluvial=$args[4];
	 				$this->tempMax=$args[5];
	 				$this->tempMin=$args[6];
	 				$this->tempRecomendada=$args[7];
	 				$this->status=$args[8];
	 				break;

	 			}//ciera el switch

  }//cierra el constructor 

  public function setId_cultivo($int)
  {

  	$this->Id_cultivo=$int;
  }

  public function getId_cultivo()
  {
  	return $this->Id_cultivo;
  }

   public function setNombre($str)
  {

  	$this->nombre=str_replace("'", "\'", $str);
  }

  public function getNombre()
  {
  	return $this->nombre;
  }


 public function setDireccion($str)
  {

  	$this->direccion=str_replace("'", "\'", $str);
  }

  public function getDireccion()
  {
  	return $this->direccion;
  }

 public function setHR($int)
  {

  	$this->HR=$int;
  }

  public function getHR()
  {
  	return $this->HR;
  }

 public function setPre_pluvial($int)
  {

  	$this->pre_pluvial=$int;
  }

  public function getPre_pluvial()
  {
  	return $this->pre_pluvial;
  }

 public function setTempMax($int)
  {

  	$this->tempMax=$int;
  }

  public function getTempMax()
  {
  	return $this->tempMax;
  }

 public function setTempMin($int)
  {

  	$this->tempMin=$int;
  }

  public function getTempMin()
  {
  	return $this->tempMin;
  }


 public function setTempRecomendada($int)
  {

  	$this->tempRecomendada=$int;
  }

  public function getTempRecomendada()
  {
  	return $this->tempRecomendada;
  }

 public function setStatus($str)
  {

  	$this->status=str_replace("'", "\'", $str);
  }

  public function getStatus()
  {
  	return $this->status;
  }

  //operaciones CRUD
  public function guardar()
  {

  	$this->con=new cConexion();
  	$this->con->conectar();
  	$sql="call insertar_cultivo('".$this->nombre."','".$this->direccion."','".$this->HR."','".$this->pre_pluvial."','".$this->tempMax."','".$this->tempMin."','".$this->tempRecomendada."');";
	//echo $sql;
	//die($sql);
    //echo var_dump($sql);
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;

  }

  public function modificar()
  {
    $this->con= new cConexion();
    $this->con->conectar();
    $sql="call actualizarCultivo(".$this->Id_cultivo.",'".$this->nombre."','".$this->direccion."',".$this->HR.",".$this->pre_pluvial."
      ,".$this->tempMax.",".$this->tempMin.",".$this->tempRecomendada.",'".$this->status."');";
  echo $sql;
    //die($sql);
    $this->con->consulta($sql);
    $this->con->desconectar();
    return true;
  }

  public function eliminar()
  {

  	$this->con=new cConexion();
  	$this->con->conectar();
  	$sql="call eliminar_cultivo(".$this->Id_cultivo.");";
  	$this->con->consulta($sql);
    $this->con->desconectar();
  	return true;
  }
  

  /**public function listartodos($query,$desde,$paginas){
	//si queremos paginar
		#if($desde!=0 or $paginas!=0){
		#	$query.=" LIMIT ".$desde.",".$paginas."";
		#}
	//*****
		$this->con= new cConexion();
		$this->con->conectar();
		$tabla=$this->con->consulta($query);
		$lista=array(); //creamos un arreglo
		if($this->con->num_rows($tabla)>0){
			while($fila=$this->con->fetch_array($tabla)){
				$tmp=new cCultivo(array($fila["Id_cultivo"],$fila["nombre"],$fila["direccion"], $fila["HR"],$fila["pre_pluvial"],$fila["tempMax"],$fila["tempMin"],$fila["tempRecomendada"],$fila["status"]));
				array_push($lista,$tmp);		
			}
		}
		$this->con->desconectar();
		return $lista;
	}
**/
  public function listartodos($query){
  //si queremos paginar
    #if($desde!=0 or $paginas!=0){
    # $query.=" LIMIT ".$desde.",".$paginas."";
    #}
  //*****
    $this->con= new cConexion();
    $this->con->conectar();
    $tabla=$this->con->consulta($query);
    $lista=array(); //creamos un arreglo
    if($this->con->num_rows($tabla)>0){
      while($fila=$this->con->fetch_array($tabla)){
        $tmp=new cCultivo(array($fila["Id_cultivo"],$fila["nombre"],$fila["direccion"], $fila["HR"],$fila["pre_pluvial"],$fila["tempMax"],$fila["tempMin"],$fila["tempRecomendada"],$fila["status"]));
        array_push($lista,$tmp);    
      }
    }
    $this->con->desconectar();
    return $lista;
  }


 }//cierra la clase 


?>