<?php 
session_start();

require_once("connection.php");

 $name= $_POST['uname'];
 $password = $_POST['psw'];



//gegevens ophalen
 $sql = "SELECT * FROM sign_up WHERE Username = ? AND Password = ?";
 $data = Array($name, $password);
 $result = getdata($sql, $data);

$i;
 foreach($result as $key=>$row) {
  $i++;
 }
if ($i == 1){
    $_SESSION['users']['loggedin'] = true;
    header("location:home.php");
} else {
    $_SESSION['users']['loggedin'] = false;
}

?>