<?php 
if(isset($_COOKIE['backdoor']))
{
    header('Location: backdoor.php');
}

else{
    $valid = TRUE;
    $myFile = 'honey_log.txt';
    require_once("getIP.php");

    if (!file_exists($myFile)) {
    }
    else if(!$fh = fopen($myFile, 'a')) {
    }
    else {
        $arr = file($myFile);
        foreach($arr as $i){
            if(strcmp($i, gethostbyaddr(getRealIpAddr()))){
                $valid = FALSE;
                setcookie('backdoor', "KKK", time() + (86400 * 30));
            }
        }
    }


    if(!(isset($_POST['humantog']) && $_POST['honeypot'] == '')){
        header('Location: backdoor.php');
    }

    else{  
        //setcookie("backdoor", time() - 450); 
        header('Location: hp-conf.php');
    }
}














?>