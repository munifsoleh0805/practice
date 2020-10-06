<?php

include "connection.php";

$input=$db->exec("insert into pemain(nama,team) values('".$_POST["nama"]."','".$_POST["team"]."')");
if ($input) {
    header("Location:index.php");
}

// var_dump($_POST);