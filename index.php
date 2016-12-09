<?php

//echo "string"." ";
if (isset($_GET['url'])) {
  $url = $_GET['url'];
  echo $url;
}
$url = explode ('/', $_GET['url']);
if(isset($url[0])){
  require 'application/controllers/'.$url[0].'.php';
}
//require 'application/controllers/'.$url.'.php';
//$controllers = new $url;
