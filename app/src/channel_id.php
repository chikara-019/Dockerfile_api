<?php
$youtubeurl = "https://www.youtube.com/@studytimer";
$home = file_get_contents($youtubeurl);
$url1 = explode('/channel/',$home);
$url2 = explode('"',$url1[1]);
var_dump($url2);
$channel_id = $url2[0];

echo $channel_id;