<?php 
class registerController{
#LLAMADA A LA PLANTILLA
#--------------------------------------
    public function pagina(){

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