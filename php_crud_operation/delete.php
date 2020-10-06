<?php

include "connection.php";

$delete=$db->exec("delete from pemain where id=".$_GET["id"]);

if ($delete) {
    header("Location:index.php");
}

// var_dump($_GET['id_siswa']);