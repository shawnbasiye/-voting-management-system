<?php

session_start();

//initializing variables
$First_name="";
$Last_name="";
$Email="";
$Reg_No="";

//connect to db

$db =mysqli_connect('localhost','root','','voters main') or die(could not connect to a database);

//Register users

$First_name=mysqli_escape_string($db, $_POST)
$Last_name="";






























?>
