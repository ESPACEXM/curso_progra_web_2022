<?php
session_start();
if(!$_SESSION['user_id']){

    header("location: ../.../index.php");

}
include_once("../../model/functions.php");


?>