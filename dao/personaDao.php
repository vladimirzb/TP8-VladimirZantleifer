<?php


include_once $_SERVER['DOCUMENT_ROOT']  . '/model/persona.php';

class PersonaDao{

    public static function obtenerTodos()
    {
        //ME CONECTO CON LA BASE DE DATOS Y DEFINO MIS CREDENCIALES. HAGO EL OPEN DE MI CONEXION

        $DBH = new PDO("mysql:host=127.0.0.1;dbname=tp8-bd-vladimir", "root", "");

        //EN UNA VARIABLE DEFINO LA QUERY QUE DESEO EJECUTAR. PUEDE SER UN SELECT, INSERT, UPDATE, O DELETE. OBSEVAR QUE LOS PARAMETROS (CAMPOS DINAMICOS) SE PASAN UTILIZANDO ":" .

        $query = 'SELECT * FROM Persona';

        //LE DEFINO LA QUERY A MI OBJETO DE CONEXION.

        $STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);

        //EJECUTO LA CONSULTA PASANDO COMO PARAMETROS EL ARRAY DE PARAMETROS.(SI ES UN SELECT QUE NO REQUIERE PASAR PARAMETROS NO SE PASA NADA)

        $STH->execute();

        //CONSULTO SI HAY REGISTROS COMO RESULTADO DEL SELECT
        $lista = array();

        if ($STH->rowCount() > 0) {

            //RECORRO CADA FILA
            while($row = $STH->fetch()) {
                $UnaPersona = new persona();
                $UnaPersona->id= $row['id'];
                $UnaPersona->nombre=  $row['nombre'];
                $UnaPersona->apellido=  $row['apellido'];
                $UnaPersona->dni=  $row['dni']; 
                
                $lista[] = $UnaPersona;

            }
        }
        return $lista;
    }

    public static function agregarPersona($PersonaAAgregar)
    {

        //ME CONECTO CON LA BASE DE DATOS Y DEFINO MIS CREDENCIALES. HAGO EL OPEN DE MI CONEXION

        $DBH = new PDO("mysql:host=127.0.0.1;dbname=tp8-bd-vladimir", "root", "");
        
        //EN UNA VARIABLE DEFINO LA QUERY QUE DESEO EJECUTAR. PUEDE SER UN SELECT, INSERT, UPDATE, O DELETE. OBSEVAR QUE LOS PARAMETROS (CAMPOS DINAMICOS) SE PASAN UTILIZANDO ":" .

        $query = 'INSERT INTO Persona (nombre,apellido,dni) values(:nombre,:apellido,:dni)';

        //LE DEFINO LA QUERY A MI OBJETO DE CONEXION.

        $STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);

        //CREO UN ARRAY CON PARAMETROS EN CASO DE QUE LA CONSULTA LOS REQUIERA

        $params = array(                                
            ":nombre" => $PersonaAAgregar->nombre,
            ":apellido" => $PersonaAAgregar->apellido,
            ":dni" => $PersonaAAgregar->dni
        );

        //EJECUTO LA CONSULTA PASANDO COMO PARAMETROS EL ARRAY DE PARAMETROS.(SI ES UN SELECT QUE NO REQUIERE PASAR PARAMETROS NO SE PASA NADA)

        $STH->execute($params);

        //ESTA LINEA SOLO SE UTILIZA PARA LOS INSERT. DEVUELVE EL ULTIMO ID GENERADO COMO AUTOINCREMENTAL LUEGO DE SU EJECUCION

        return $DBH->lastInsertId();

    }


}



?>