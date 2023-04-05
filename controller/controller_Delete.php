<?php
    include_once '../model/ConDB.php';
    include_once '../model/FunctionInterfaceCRUD.php';

    
    $have = isset($_GET["id"]) ? $_GET["id"] : NULL;
    $id = htmlspecialchars($have);
    $obj_name = new functionthInterfaceCRUD();
    $rs2 = $obj_name->Delete($id);

    include "../assets/aleart/Delete.js";
?>
