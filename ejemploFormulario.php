<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Formularios prueba</title>
	</head>
	<body>
		<h1>Trabajando con formularios</h1>
		<form action="" method="post">
			<fieldset>
				<legend>Datos del alumno</legend>
				<label for="nombre">Nombre:</label>  <!-- Ojo!!! El 'for' hace referencia al 'id' del input!! -->
				<input type="text" name="nombre" id="nombre"/>
				<br>
				<label for="apellidos">Apellidos:</label>
				<input type="text" name="apellidos" id="apellidos"/>
				<br>
				<label for="curso">Curso:</label>
				<input type="text" name="curso" id="curso"/>
				<br>
				<label for="dni">DNI:</label>
				<input type="number" name="dni" id="dni"/>
				<br>
			</fieldset>
			<br>
			<input type="submit" value="enviar"/>
		</form>
		<?php
			class Alumno {
				
				// DECLARACIÓN VARIABLES.
				private $nombre;
				private $apellidos;
				private $curso;
				private $dni;
				
				//CONSTRUCTOR
				public function Alumno($dni=0, $nombre="", $apellidos="", $curso="") { // Como no se puede hacer sobrecarga de las funciones, paso todos los parámetros por defecto.
					$this->setDni($dni); // Es una buena práctica inicializar los valores con los setters.
					$this->setNombre($nombre);
					$this->setApellidos($apellidos);
					$this->setCurso($curso);
				}
				
				// MÉTODOS
				
				//Setters y getters
				public function setDni($dni) {
					$this->dni=$dni;
				}
				public function getDni() {
					return $this->dni;
				}
				public function setNombre($nombre) {
					$this->nombre=$nombre;
				}
				public function getNombre() {
					return $this->nombre;
				}
				public function setApellidos($apellidos) {
					$this->apellidos=$apellidos;
				}
				public function getApellidos() {
					return $this->apellidos;
				}
				public function setCurso($curso) {
					$this->curso=$curso;
				}
				public function getCurso() {
					return $this->curso;
				}
			}// fin de clase alumno
				
			if (!isset($datos)) 
				$datos = array();
			
			array_push($datos, new Alumno($_POST["dni"],$_POST["nombre"],$_POST["apellidos"],$_POST["curso"]));
			
			echo "<h1>Listado de alumnos:</h1>";
			foreach ($datos as $codigo=>$alumno) {
				echo "<p><strong>Alumno '$codigo':</strong></p>";
				echo "<p>· <strong>Nombre: </strong>".$alumno->getNombre().".</p>";
				echo "<p>· <strong>Apellidos: </strong>".$alumno->getApellidos().".</p>";
				echo "<p>· <strong>Curso: </strong>".$alumno->getCurso().".</p>";
				echo "<p>· <strong>DNI: </strong>".$alumno->getDni().".</p>";
			}
		?>
		
	</body>
</html>