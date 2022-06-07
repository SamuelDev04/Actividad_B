<?php
    //Controler user
    require_once("controller/userController.php");
    require_once("controller/plantController.php");

    //Controler aprendiz
    require_once("controller/aprendizController.php");

    //Models user
    require_once("model/dao/userDao.php");
    require_once("model/dto/userDto.php");
    
    //Models user
    require_once("model/dao/aprDao.php");
    require_once("model/dto/aprDto.php");

    //Conexion
    require_once("model/conexion.php");

    //Arranque
    $objArranque = new Planti();
    $objArranque -> getIntro();
    
?>