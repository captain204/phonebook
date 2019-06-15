<?php 
session_start();

require_once("config/config.php");


// Creating auto loader class

function __autoload($class_name){

	require_once('libraries/'.$class_name.'.php');
}
?>