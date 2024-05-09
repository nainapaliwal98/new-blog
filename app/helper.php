<?php
// Important Functions

if(!function_exists('p')){
    function p($data){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

if (!function_exists('get_formsteed_date')){
    function get_formatted_date($date,$format)
    {
        $formattedDate = date($format,strtotime($date));
    }
}