<?php
include_once $_SERVER['DOCUMENT_ROOT']  . '/dao/personaDao.php';

$accion = isset($_POST['accion']) ? $_POST['accion'] : $_GET['accion']; //RECIBO EL PARAMETRO ACCION

switch ($accion) {
    case 'nuevo':
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : $_GET['nombre']; //RECIBO EL PARAMETRO ACCION
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : $_GET['apellido']; //RECIBO EL PARAMETRO ACCION
        $dni = isset($_POST['dni']) ? $_POST['dni'] : $_GET['dni']; //RECIBO EL PARAMETRO ACCION

        // bools de validacion
        $boolLargoDni=false;
        $boolinputsCargadas=false;
        $boolSeRepitio=false;

        if (strlen($dni) <=8 ) {
            $boolLargoDni=true;
        }

        if ($nombre != "" && $apellido!= "" && $dni !="") {
            $boolinputsCargadas=true;
        }
        
        //Obtener por dni
        $resultado =  PersonaDao::obtenerPorDNI($dni);

        foreach ($resultado as $valor) {
            if ($valor->dni == $dni ) {
                $boolSeRepitio=true;
            }
        }
        // $array ahora es array(2, 4, 6, 8)
        unset($valor); // rompe la referencia con el último elemento
        
        
        if ($boolLargoDni==true && $boolinputsCargadas==true && $boolSeRepitio==false) 
        {
            $personaAAgregar = new persona();
            $personaAAgregar -> nombre = $nombre;
            $personaAAgregar -> apellido = $apellido;
            $personaAAgregar -> dni = $dni;
            
            PersonaDao::agregarPersona($personaAAgregar);
            echo ("Persona agregada exitosamente");
        }
        else
        {
            if ($boolSeRepitio==true) {
                echo ("El dni ingresado ya esta registrado");
            }
         
        }
        
        
        break;
    case 'modificar':
        //logica
        break;
    case 'eliminar':
        //logica
        break;
    case 'listar':
        $resultado =  PersonaDao::obtenerTodos();
        echo json_encode($resultado);
        break;
    case 'obtener':
        $id = isset($_POST['id']) ? $_POST['id'] : $_GET['id']; //RECIBO EL PARAMETRO ACCION
        break;
}
?>