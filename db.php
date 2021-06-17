<?php
require "rb.php";

R::setup('mysql:host=localhost;dbname=register-db', 'root', 'root');

session_start();

function showError($errors){
    return array_shift($errors);
}
?>