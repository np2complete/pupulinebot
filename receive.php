<?php
  //echo "hello i'm pupu / 180109"
  $json_str = file_get_contents('php://input'); //接收REQUEST的BODY
  $json_obj = json_decode($json_str); //轉json格式
  $myfile = fopen("log.txt","w+") or die("unable to open file!");
  fwrite($myfile, "\xEF\xBB\xBf".$json_str); //在字串前加入轉成utf8
  fclose($myfile);
?>
