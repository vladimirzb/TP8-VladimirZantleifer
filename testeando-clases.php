<?php

include_once $_SERVER['DOCUMENT_ROOT']  . '/dao/personaDao.php';

$resultado =  PersonaDao::obtenerTodos();
var_dump(json_encode($resultado));

// $personaPrueba = new persona();
// $personaPrueba -> nombre = 'pepe';
// $personaPrueba -> apellido = 'pepe';
// $personaPrueba -> dni = '123123123';


// //TRUNCATE TABLE persona -borrar todos los elementos de la tabla
// echo  PersonaDao::agregarPersona($personaPrueba);
// var_dump($_POST);
?>