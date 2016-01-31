<?
/**
* 
*/
class Cconexion 
{
	
	function __construct()
	{
		include_once"config.php";
		public $con;
	}


    public  function conectar(){

  	 	$this->con = new mysqli(SERVER, USER, PASS,DB);
  	 	if($this->con->connect_errno){
  	 		return false;
  	 	}else{
  	 		//echo "se conecto correctamente";

  	 		$con->set_charset("utf8");
  	 		   echo "se conecto";
			  return $con;
			
  	 	}

	}


}

$conectar = new Conexion();
$conectar->conectar();



?>