<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title>


<style>

    header{
        text-align: center;
        font-size:25px;
        justify-content: center;
        color: black;
        border: none;
        border-radius: 25px;
        margin: 0px;
        padding: 7px;
    }
    nav{
        position:relative;
        margin:auto;
        width:100%;
        height:auto;
        background-color:black;
        border-radius: 25px;

    }

    nav ul{
        position: relative;
        text-align: center;
        margin: auto;
        width: 50%;
    }
    nav ul li{
        display:inline-flex;
        width: 24%;
        line-height:50px;
        list-style:none;
        font-family: fantasy;
        font-size:20px;


    }

    nav ul li a{
        color:white;
        text-decoration:none;

    }

    section{
        position:relative;
        padding:10px;
        margin:auto;
        justify-content:center;
        text-align:center;
    }
</style>

</head>
<body>
<Header>
        <h1>LOGOTYPE</h1>
</Header>
<?php 
    include "modules/navigation.php"
?>
<section>
<?php 

$mvc = new MvcController();
$mvc-> enlacesDePaginasController();

?>
</section>
</body>
</html>
