<?php

class enlacesPaginas{

    public function enlacesPaginasModel($enlacesModel){

    
    if ($enlacesModel == "index"||
        $enlacesModel == "Ingresar"||
        $enlacesModel == "Usuarios"||
        $enlacesModel == "Editar"||
        $enlacesModel == "Salir"){

        
        $module = "vista/modules/".$enlacesModel.".php";
            
    }
    
    else if($enlacesModel == "index.php"){

        $module= "vista/modules/registro.php";
    }

    else{
        $module= "vista/modules/registro.php"; 

    }
    
    return $module;

    }

}
?>
