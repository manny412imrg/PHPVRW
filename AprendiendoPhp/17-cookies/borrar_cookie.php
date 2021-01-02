<?php
if($_COOKIE['micookie']){
setcookie('micookie', '', time()-1);
}

header('Location: ver_cookies.php');