<?php

class usuario{
	public $nombre;
	public $user;
	public $email;
	public $contraseña;
	public $contraseña2;

	public function alta(){
	
		$conexion=mysql_connect("localhost","root","");
		$base=mysql_select_db("usuario");
		
		if($this->contraseña!="" && $this->contraseña2!="" && $this->nombre!="" && $this->user!="" && $this->email!=""){
		
			if($this->contraseña == $this->contraseña2){
				$sql="Insert into usuario (nombre,email,usuario,contrasena) values('$this->nombre', '$this->email', '$this->user', '$this->contraseña')";
				$consulta=mysql_query($sql);
				
				if($consulta==1)
				{
					echo "Registro insertado";
				}
				else
				{
					echo "Registro no insertado";
				}
			}
			else
			{
				echo "Las contrasenias no coinciden";
			}
		
		
		}
		else{
			echo "Hay campos vacios";
		}
	
	
	
	}


}

?>