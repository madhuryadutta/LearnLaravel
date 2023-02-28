<?php
//important function
// echo "Hello World";
if(!function_exists('m')){
    function m($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if(!function_exists('get_formated_date')){
    function get_formated_date($date,$format){
        $formateddate = date($format,strtotime($date));
        return $formateddate;
    }
}

?>