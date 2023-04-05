<?php
    include_once '../model/ConDB.php';
    include_once '../model/Function.php';

    $have = isset($_GET["id"]) ? $_GET["id"] : NULL;
    $id = htmlspecialchars($have);
    // echo $id;
    $obj_name = new MyFunction();
    $rs2 = $obj_name->getStudentDetail($id);
    $jsonCode = $rs2;
    $jsonDecode = json_decode($jsonCode, true);

    include "../view/view_Edit.php";
?>