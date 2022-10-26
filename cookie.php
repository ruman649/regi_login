<?php

setcookie('user_cookie', "Ruman Miah", time()+2*365*24*69*60);
setcookie('user_cookie', null, time()-60);

echo $_COOKIE['user_cookie'];


?>