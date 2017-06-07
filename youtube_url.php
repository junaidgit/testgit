<?php


function get_youtube($url){

 $youtube = "http://www.youtube.com/oembed?url=". $url ."&format=json";

 $curl = curl_init($youtube);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 $return = curl_exec($curl);
 curl_close($curl);
 return json_decode($return, true);

 }

 $url = 'https://www.youtube.com/watch?v=1tVL11ULjYY';// youtube video url 

// Display Data 
$data = get_youtube($url);
print_r($data);
