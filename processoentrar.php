<?php
$user="";
$hostnmae="";
$password="";
$database="";

$conexao= new mysqli( $user,$hostnmae,$password,$database);
if($connect-> connect_errno()){
    die("Erro to connect to DB". $connect->connect_error());
 }else{
    $nome = real_escape_tring[$_POST('nome')];
    $email = real_escape_tring[$_POST('email')];
    %

 }


?>
