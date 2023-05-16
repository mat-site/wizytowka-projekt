<?php
$con = new mysqli('localhost','root','','blog');
if($con == true){
    // polączono
}else {
    echo 'Błąd połączenia';
}
?>