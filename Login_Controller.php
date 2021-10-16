<?php
session_start();
include_once 'functions.php';
 
$_SESSION['login']=$_POST['login'];
$_SESSION['pass']=$_POST['pass'];
$_SESSION['passmd']=md5($_POST['passmd']);
redirect('index.php');