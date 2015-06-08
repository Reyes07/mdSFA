<?php
	include_once("../datos/cConexion.php");

		class cTemperatura
		{


			private $Id_temp;
			private $tempMax;
			private $tempMin;
			private $fecha;
			private $Id_zona;
			
			private $con;


			public function __construct($args)
			{

				$cantidad=sizeof($args);
					switch ($cantidad) {
						case 1:
							$this->Id_temp=$args[0];

							break;
						
						
						case 3:
							$this->tempMax=$args[0];
							$this->tempMin=$args[1];
							$this->fecha=$args[2];
							//$this->Id_zona=$args[3];
							
							break;
					}//cierra el switch


			}//cierra el constructor

			public function setId_temp($valor)
			{

				$this->Id_temp=$valor;
			}

			public function getId_temp()
			{

				return $this->Id_temp;
			}

			public function settempMax($valor)
			{

				$this->tempMax=$valor;
			}

			public function gettempMax()
			{
				return $this->tempMax;
			}

			public function settempMin($valor)
			{
				$this->tempMin=$valor;
			}

			public function gettempMin()
			{
				return $this->tempMin;
			}

			public function setfecha($valor)
			{
				$this->fecha=$valor;
			}

			public function getfecha()
			{

				return $this->fecha;
			}

			public function setId_zona($valor)
			{

				$this->Id_zona=$valor;
			}

			public function getId_zona()
			{

				return $this->Id_zona;
			}
			public function guardar()
			{
				$this->con=new cConexion();
				$this->con->conectar();
				$sql="call insertar_Temperatura('".$this->tempMax."','".$this->tempMin."','".$this->fecha."');";
				//echo $sql;
				//die($sql);
				$this->con->consulta($sql);
			    $this->con->desconectar();
			    return true;
			}

		}

?>