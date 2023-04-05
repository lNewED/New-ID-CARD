<?php
    interface myFunctionInterfaceCRUD {
        public function addUserArray($addStu);
        public function EditUserArray($editStu);
        public function Delete($id);
    }

    Class functionthInterfaceCRUD implements myFunctionInterfaceCRUD {

        private $ConDB;
        public function __construct(){
            $con = new ConDB();
            $con->connect();
            $this->ConDB = $con->conn;
        }

        public function addUserArray($addStu)
        {
            $sql = "INSERT INTO `studentsuser` (`id`, `name`, `lastname`, `age`, `file_img` , college_Years , major , NumberID , cardDeathDate , cno1 , cno2 , cno3 , cno4 , imgD1 , imgD2 , imgD3)
                    VALUES ('', '$addStu[name]' ,'$addStu[lastname]', '$addStu[age]' ,'$addStu[file_img]', '$addStu[college_Years]' ,'$addStu[major]', '$addStu[NumberID]'
                    ,'$addStu[cardDeathDate]', '$addStu[cno1]' ,'$addStu[cno2]', '$addStu[cno3]' ,'$addStu[cno4]' ,'$addStu[file_imgD1]','$addStu[file_imgD2]','$addStu[file_imgD3]')";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                return true;
            }else {
                return false;
            }
        }

        public function EditUserArray($editStu)
        {
            $sql = "UPDATE studentsuser 
                SET name='$editStu[name]',lastname='$editStu[lastname]',age='$editStu[age]',file_img='$editStu[file_img]',college_Years='$editStu[college_Years]',major='$editStu[major]',NumberID='$editStu[NumberID]',cardDeathDate='$editStu[cardDeathDate]',
                cno1='$editStu[cno1]',cno2='$editStu[cno2]',cno3='$editStu[cno3]',cno4='$editStu[cno4]',imgD1='$editStu[file_imgD1]',imgD2='$editStu[file_imgD2]',imgD3='$editStu[file_imgD3]'
                WHERE id='$editStu[id]'";

            $query = $this->ConDB->prepare($sql);
                if( $query->execute()){
                    return true;
                }else {
                    return false;
                }
        }

        public function Delete($id)
        {
            $sql = "DELETE FROM `studentsuser` WHERE `id`='".$id."'";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                return true;
            }else {
                return false;
            }
        }
        
    }
  ?>