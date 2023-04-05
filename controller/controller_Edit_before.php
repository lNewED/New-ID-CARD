<?php
    include_once '../model/ConDB.php';
    include_once '../model/FunctionInterfaceCRUD.php';

    $have = isset( $_POST['id']) ?  $_POST['id'] : NULL;
    $id = $have;
    $names = $_POST['names'];
    $lastname = $_POST['lastname'];
    $major = $_POST['major'];
    $year = $_POST['year'];
    $co1 = $_POST['co1'];
    $co2 = $_POST['co2'];
    $co3 = $_POST['co3'];
    $co4 = $_POST['co4'];
    $birthday = $_POST['birthday'];
    $DM = $_POST['DM'];
    $DY = $_POST['DY'];
    $no = $_POST['no'];

    //CardID
    if ($year >= 0 && $year <= 2023) {
        $newYear = $year;
    } else {
        include '../assets/aleart/yearError.js';
    }

    //Death Date
    if ($DM <= 12 && $DM >= 10) {
        if ($DY <= 99 && $DY >= 10) {
            $Deathdate = "$DM/$DY";
        } else if ($DY <= 9 && $DY >= 0) {
            $Deathdate = "$DM/$DY";
        } else {
            include '../assets/aleart/DateDeathError.js';
        }
    } else if ($DM <= 9 && $DM >= 1) {
        if ($DY <= 99 && $DY >= 10) {
            $Deathdate = "$DM/$DY";
        } else if ($DY <= 9 && $DY >= 0) {
            $Deathdate = "$DM/$DY";
        } else {
            include '../assets/aleart/DateDeathError.js';
        }
    } else {
        include '../assets/aleart/DateDeathError.js';
    }

    if ($newYear != 0  &&  $Deathdate != "") {
        // UplodeImage
        if ($_FILES["uploadfile"]["name"]) {
            $file_img = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "../assets/img/studyCard/" . $file_img;
            $imageFileType = strtolower(pathinfo($file_img, PATHINFO_EXTENSION));
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                include '../assets/aleart/ImgError.js';
                $file_img = 0;
            } else {
                move_uploaded_file($tempname, $folder);
            }
            if ($_FILES["uploadfileD1"]["name"]) {
                $file_imgD1 = $_FILES["uploadfileD1"]["name"];
                $tempnameD1 = $_FILES["uploadfileD1"]["tmp_name"];
                $folderD1 = "../assets/img/studyCard/" . $file_imgD1;
                $imageFileType = strtolower(pathinfo($file_imgD1, PATHINFO_EXTENSION));
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    include '../assets/aleart/ImgError.js';
                    $file_imgD1 = 0;
                } else {
                    move_uploaded_file($tempnameD1, $folderD1);
                }
                if ($_FILES["uploadfileD2"]["name"]) {
                    $file_imgD2 = $_FILES["uploadfileD2"]["name"];
                    $tempnameD2 = $_FILES["uploadfileD2"]["tmp_name"];
                    $folderD2 = "../assets/img/studyCard/" . $file_imgD2;
                    $imageFileType = strtolower(pathinfo($file_imgD2, PATHINFO_EXTENSION));
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        include '../assets/aleart/ImgError.js';
                        $file_imgD2 = 0;
                    } else {
                        move_uploaded_file($tempnameD2, $folderD2);
                    }
                    if ($file_imgD3 = $_FILES["uploadfileD3"]["name"]) {
                        $file_imgD3 = $_FILES["uploadfileD3"]["name"];
                        $tempnameD3 = $_FILES["uploadfileD3"]["tmp_name"];
                        $folderD3 = "../assets/img/studyCard/" . $file_imgD3;
                        $imageFileType = strtolower(pathinfo($file_imgD3, PATHINFO_EXTENSION));
                        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                            include '../assets/aleart/ImgError.js';
                            $file_imgD3 = 0;
                        } else {
                            move_uploaded_file($tempnameD3, $folderD3);
                        }
                    }
                }
            }
        }

        if ($file_img != 0  && $file_imgD1 != 0 && $file_imgD2 != 0 && $file_imgD3 != 0) {
            $editStu = array();
            $editStu["id"] = $id;
            $editStu["file_img"] = $file_img;
            $editStu["file_imgD1"] = $file_imgD1;
            $editStu["file_imgD2"] = $file_imgD2;
            $editStu["file_imgD3"] = $file_imgD3;
            $editStu["name"] = $names;
            $editStu["lastname"] = $lastname;
            $editStu["college_Years"] = $newYear;
            $editStu["major"] = $major;
            $editStu["age"] = $birthday;
            $editStu["NumberID"] = $no;
            $editStu["cardDeathDate"] = $Deathdate;
            $editStu["cno1"] = $co1;
            $editStu["cno2"] = $co2;
            $editStu["cno3"] = $co3;
            $editStu["cno4"] = $co4;
        } else {
            return false;
        }
    } else {
        return false;
    }

    $obj_name = new functionthInterfaceCRUD();
    $submitEdit = $obj_name->EditUserArray($editStu);

    $pass = isset($submitEdit) ? include '../assets/aleart/Success.js' : include '../assets/aleart/Fail.js';
?>