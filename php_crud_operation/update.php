<?php

include "connection.php";

$update=$db->exec("update pemain set nama='".$_POST["nama"]."',team='".$_POST["team"]."'where id=".$_POST["id"]);

if ($update) {
    header("Location:index.php");
}