<?php
/*$video_id = 'rgIRDM5ge50';
$youtube_view_count = json_decode(file_get_contents('http://gdata.youtube.com/feeds/api/videos/'.$video_id.'?v=2&alt=json'))->entry->{'yt$statistics'}->viewCount;
echo $youtube_view_count;*/
//$apikye  = 'AIzaSyD3aDzrcUSgdOj3uVmmU1a90HmxF_EhDns';

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

die;
  //just commit git hub to change api 
//echo $value; 
//print_r($arr);


  /*foreach($url as $detail)
  {
      $data =[];
      $data['author_url'] =  $detail['author_url'];
      $data['title'] =  $detail['title'];
      $data['thumbnail_width'] =  $detail['thumbnail_width'];
      $data['width'] =  $detail['width'];
      $data['html'] =  $detail['html'];
      $data['type'] =  $detail['type'];
      $data['thumbnail_url'] =  $detail['thumbnail_url'];
        $data['author_name'] =  $detail['author_name'];
      $data['provider_url'] =  $detail['provider_url'];
      $data['provider_name'] =  $detail['provider_name'];
      array_push($video_data,$data);
  }
  
  
/* youtube url coutn views video
$link = 'https://www.youtube.com/watch?v=rgIRDM5ge50';
echo $id=  str_replace('https://www.youtube.com/watch?v=',"",$link);
echo "<br>";
$path = "http://gdata.youtube.com/feeds/api/videos/$id?v=2";
$xml  = simplexml_load_file($path);
print_r($xml);
foreach ($xml as  $value) {
   $p[] = $value;
   foreach ($value as $a) {
   	$o = $a;
   }
}
echo $p[5];
 echo str_replace("'http://gdata.youtube.com/feeds/api/users/","",$o[0]);
//echo json_encode($path,JSON_UNESCAPED_SLASHES);
/*$video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
if (empty($video_id[1]))
$video_id = explode("be/", $link); // For videos like http://www.youtu.be/...
$video_id = explode("&", $video_id[1]); // Deleting any other params
$video_id = $video_id[0];
$youtube_view_count = json_decode(file_get_contents('http://gdata.youtube.com/feeds/api/videos/'.$video_id.'?v=2&alt=json'))->entry->{'yt$statistics'}->viewCount;
echo $youtube_view_count;
*/