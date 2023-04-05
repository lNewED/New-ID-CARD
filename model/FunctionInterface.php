<?php
    interface myFunctionInterface {
        public function dateCalculator($date);
        public function checkYear($college_Years);
    }

    Class functionthInterface implements myFunctionInterface {

    public function dateCalculator($date)
        {
            isset( $date ) ? $date : $date = "";
            if( !empty( $date ) ) {
                $e = explode("-", $date);
                $age = date("Y") - $e[0];
                $data = array("$date","$age");
                $json = json_encode($data);
                return $json ;
            }else {
                return false;
            }
        }

        public function checkYear($college_Years)
        {
            isset($college_Years) ? $college_Years : $college_Years = "";
            if( !empty( $college_Years ) ){
                if($college_Years <= 2023 && $college_Years >= 2020){
                    if($college_Years == 2023){
                        $text= "นักศึกษา ปี 1";
                        return$text;
                    }else if($college_Years == 2022){
                        $text= "นักศึกษา ปี 2";
                        return$text;
                    }else if($college_Years == 2021){
                        $text= "นักศึกษา ปี 3";
                        return$text;
                    }else if($college_Years == 2020){
                        $text= "นักศึกษา ปี 4";
                        return$text;
                    }
                }else{
                    $text= "พ้นสภาพนักศึกษาแล้ว";
                    return $text;
                }
            }
        }
        
    }
  ?>