<?php 
class MvcController{
#LLAMADA A LA PLANTILLA
#--------------------------------------
    public function plantilla(){

        include "vista/template.php";
    }

#INTERACCION DE USUARIO
#--------------------------------------

    public function enlacesDePaginasController(){
        
    if(isset($_GET ["action"])){

    $enlacesController = $_GET ["action"];

    }

    else 
    {
        $enlacesController = "index.php";
    }

    $respuesta = enlacesPaginas::enlacesPaginasModel($enlacesController);

    include $respuesta;

        }

        
}


?>