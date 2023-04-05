<?php
    include_once '../model/ConDB.php';
    include_once '../model/Function.php';
    $obj_name = new MyFunction();
    $rs2 = $obj_name->getStudent();

    // Read JSON Decode From encode to decode
    $jsonCode = $rs2;
    $jsonDecode = json_decode($jsonCode, true);
    foreach ($jsonDecode as $result2){
        include "../view/view_Delete_students.php";
    }
?>