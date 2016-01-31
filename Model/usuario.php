<?php 

/**
* 
*/
class Usuario 
{

	
	private $conexion;
	
	public  function __construct()
	{
		require_once('conexion.php');
		
		$this->conexion = new Conexion();
		$this->conexion->conectar();
		
	}
	function identificar($username, $password){
     
		//$pass=sha1($password);
		//$sql='select count(*) from  Usuario  ';
		//"SELECT * FROM Usuario WHERE Nombre='$username' && Pass='$pass' "
		//$re = $this->conexion->conexion->query($sql);
		//echo"soy re: <br>";
		//print_r($re);
		//echo "<br>";
		//var_dump($re->num_rows);
		//$re = $this->conexion->conexion->query($sql);
		//$re = $this->conexion->conexion->query($sql);

		//$filas = $re->fetch_array();
        //echo json_encode($filas);
        //var_dump($re->fetch_fields());
       // exit();
		/*$filas = $re->fetch_array();
		$resultado = $filas;
		if(!$resultado){
          echo "holaa";
          echo $filas;
		}else{
           echo "laca";
		}
		var_dump($resultado);
		return $resultado;*/
		//$this->conexion->cerrar();
		$sql = "select * from Usuarios where Nombre='hebert'  AND  Pass='123' ";
		$re = $this->conexion->conexion->query($sql);
		$filas = $re->num_rows;
		if(!empty($filas)){
			echo $filas;
		    //var_dump($re->fetch_array());
			}
			else{
			    var_dump('No existen filas.');
			}
			exit();
	
		

	}
}
$p= new Usuario();
$p->identificar('Hebert','123');




?>