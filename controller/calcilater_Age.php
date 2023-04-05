<?php
    include_once '../model/FunctionInterface.php';
    $obj_name = new functionthInterface();
    $cal = $obj_name->dateCalculator($date);

    // Read JSON Decode From encode to decode
    $jsonAge = $cal;
    $json_Age = json_decode($jsonAge, true);
?>