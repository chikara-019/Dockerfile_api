<?php
$youtubeurl = "https://www.youtube.com/watch?v=wPDl_XuUGqY";
$home = file_get_contents($youtubeurl);
//var_dump($home);
$url1 = explode('/channel/',$home);
//print_r($url);
$url2 = explode('"',$url1[1]);
$channel_id = $url2[0];

echo $channel_id;