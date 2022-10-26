<?php
include "connection.php";

$to_email = "rumanmiah742@gmail.com";
$sub = "morning";
$body = "Mr ruman! Listen me, You are littel bit of success now ";
// $headers = "From: mruman649@gdfadsfadmail.com";

if(mail($to_email, $sub, $body)){
    echo "Yes";
}else{
    echo "no";
}


?>