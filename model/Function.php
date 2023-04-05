<?php
    class MyFunction{
        private $ConDB;
        public function __construct(){
            $con = new ConDB();
            $con->connect();
            $this->ConDB = $con->conn;
        }

        public function getStudentJSON($filename)
        {
            $dataJSON = file_get_contents($filename);
            if($dataJSON){
                $decode = json_decode($dataJSON);
                return $decode;
            }else{
                include false;
            }
        }
        public function getStudent()
        {
            $sql = "SELECT * FROM studentsuser";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                $data = json_encode($result);
                return $data;
            }else {
                return false;
            }
        }

        public function getStudentDetail($id)
        {
            $sql = "SELECT * FROM studentsuser where id = ".$id;
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                $result = $query->fetch(PDO::FETCH_ASSOC);
                $data = json_encode($result);
                return $data;
            }else {
                return false;
            }
        }

    /*    public function addUser($Email , $User , $PassMD5) // ADD NO ARRAY
        {
            $sql = "INSERT INTO `loginwww` (`id`, `email`, `username`, `password`)
                    VALUES ('', '$Email' ,'$User', '$PassMD5')";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                include "alertInputSuccess.js";
            }else {
                include "alertInput.js";
            }
        }

        public function addUserArray($data_register) // ADD BY ARRAY 1
        {
            $sql = "INSERT INTO `loginwww` (`id`, `email`, `username`, `password`)";
            $sql .= " VALUES ('', :EMAIL, :USERNAME, :PASSWORD);";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute($data_register)){
                include "alertInputSuccess.js";
            }else {
                include "alertInput.js";
            }
        }

        public function addUserArray2($register) // ADD  BY ARRAY 2
        {
            $sql = "INSERT INTO `loginwww` (`id`, `email`, `username`, `password`)
                    VALUES ('', '$register[EMAIL]' ,'$register[USERNAME]', '$register[PASSWORD]')";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                include "alertInputSuccess.js";
            }else {
                include "alertInput.js";
            }
        }

        public function addUserArray3($register) // ADD BY ARRAY 3
        {
            $sql = "INSERT INTO `loginwww` (`id`, `email`, `username`, `password`)";
            $sql .= " VALUES ('', :EMAIL, :USERNAME, :PASSWORD);";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute($register)){
                include "alertInputSuccess.js";
            }else {
                include "alertInput.js";
            }
        }

        public function editUser($id , $Email , $User , $PassMD5) // ADD NO ARRAY
        {
            $sql = "UPDATE user SET first_name='$Email', last_name='$User', team='$PassMD5'
            WHERE id ='$id'";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                return true;
            }else {
                return false;
            }
        } */


    }
?>