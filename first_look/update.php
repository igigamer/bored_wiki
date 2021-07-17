<?php


include_once("connect.php");
    
$edit = 'UPDATE page SET about_me =" '.$_POST["about_me"].' ", story =" '.$_POST["story"].' ", appearance =" '.$_POST["appearance"].' ", links =" '.$_POST["links"].' ", images =" '.$_POST["images"].' " WHERE id=13';




if($database->query($edit)){
    echo "page updated";
    echo '<button onclick=window.location.href="edit.php">Back to edit</button>';
    echo '<button onclick=window.location.href="wikipage.php?id=5">Go to edited Page</button>';
    echo '<button onclick=window.location.href="index.php">Go to Start page</button>';
}else{
    echo 'shit doesnt work';
}


$database->close();




?>