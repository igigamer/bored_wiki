<?php 

$database = new mysqli('localhost', 'root', '', 'bored_wiki');

if($database->connect_errno){
    echo 'Db broken' . $database->connect_error;
    }

?>