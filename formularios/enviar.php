<?php 

//isset es verdadero si la variable que se le pasa como parámetro no está vacía

//si se ha pulsado el botón de enviar formulario
if (isset($_POST["enviar"])){
	
		//se crea la variable "de" y se le asigna lo que el usuario ha escrito en el campo "de" del formulario
		$de=$_POST["email"];
		
		//se crea la variable "asunto" y se le asigna lo que el usuario ha escrito en el campo "asunto" del formulario
		$asunto=$_POST["asunto"];
				
		
		//se crea la variable "mensaje" y se le asigna lo que el usuario ha escrito en el campo "mensaje" del formulario
		$mensaje= "Has recibido una consulta a traves del formulario Web" . "\n" . "Mensaje: " . $_POST["mensaje"] . "\n" . "Telefono: " . $_POST["telefono"] . "\n" . "Direccion: " . $_POST["direccion"] . "\n"
            . "Poblacion: " . $_POST["poblacion"] . "\n" . "Acepta las condiciones: " . $POST["normas"]  . "\n" .  "Marca: " . $_POST["ios"] . $_POST["android"] . "\n" . "Password: " . $_POST["pass"]  . "\n" 
            . "Sexo: " . $_POST["sexo"] . "\n" .  "Estado civil: " . $_POST["civil"] . "\n" . "Provincia: " . $_POST["provincia2"] . "\n" ;

		 
		//sintaxis mail(destino, asunto,mensaje,cabeceras);
		mail( 'lorenzo@solvam.es' , $asunto , $mensaje , "From: $de \n");
		 
		//mensaje de confirmación de envío
		echo "El formulario ha sido enviado con exito.";
}
?>