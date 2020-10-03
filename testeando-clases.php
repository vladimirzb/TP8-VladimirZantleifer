<?php

include_once $_SERVER['DOCUMENT_ROOT']  . '/dao/personaDao.php';

$resultado =  PersonaDao::obtenerTodos();
echo json_encode($resultado);

// $personaPrueba = new persona();
// $personaPrueba -> nombre = 'pepe';
// $personaPrueba -> apellido = 'pepe';
// $personaPrueba -> dni = '123123123';


// //TRUNCATE TABLE persona -borrar todos los elementos de la tabla
// echo  PersonaDao::agregarPersona($personaPrueba);
?>