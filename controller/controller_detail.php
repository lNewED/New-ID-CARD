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

    $haveDate = isset($jsonDecode["age"]) ? $jsonDecode["age"] : NULL;
    $date = $haveDate;
    include 'calcilater_Age.php';

    $haveYear = isset($jsonDecode["college_Years"]) ? $jsonDecode["college_Years"] : NULL;
    $college_Years = $haveYear;
    include 'calcilater_Year.php';

    $DMY = $json_Age[0];
    $newDate = date("d-m-Y", strtotime($DMY));

    include "../view/view_detail.php";
?>