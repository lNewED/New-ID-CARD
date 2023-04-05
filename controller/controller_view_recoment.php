<?php
    include_once 'model/ConDB.php';
    include_once 'model/Function.php';
    $filename = 'assets/json/recommet.json';
    $obj_name = new MyFunction();
    $rs = $obj_name->getStudentJSON($filename);
        
    include "view/view_recoment.php";
?>