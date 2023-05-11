<?php 
require_once("connection.php");

 $name= $_POST['uname'];
 $password = $_POST['psw'];
//gegevens toevoegen
 $sql = "INSERT INTO sign_up (Username,Password) VALUES (?,?)";
 $data = array($name, $password);
 $result = getdata ($sql, $data);

 header("location: home.php");
?>