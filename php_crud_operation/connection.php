<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=volly","root","",[PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}