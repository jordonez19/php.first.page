<?php

class enlacesPaginas{

    public function enlacesPaginasModel($enlacesModel){

    
    if ($enlacesModel == "nosotros"||
        $enlacesModel == "servicios"||
        $enlacesModel == "contactos"){

        
        $module = "vista/modules/".$enlacesModel.".php";
            
    }
    
    else if($enlacesModel == "index.php"){

        $module= "vista/modules/inicio.php";
    }

    else{
        $module= "vista/modules/inicio.php"; 

    }
    
    return $module;

    }

}
?>
