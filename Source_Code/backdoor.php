<?php
require_once("getIP.php"); 
$ip = getRealIpAddr();
header("HTTP/1.0 404 Not Found");
if(isset($_COOKIE['backdoor'])){
  echo "You have already been blacklisted once!";
  // setcookie("backdoor", "", time() - 3600);
}
else{
  echo "You have been added to blacklist! You have been warned!";
}
if(isset($ip))
{
  $myFile = 'honey_log.txt';
  if (!file_exists($myFile)) {
  }
  else if(!$fh = fopen($myFile, 'a')) {
  }
  else {
    $output = gethostbyaddr($ip);
    fwrite($fh, $output."\n");
    fclose($fh);


  }


}



?>
