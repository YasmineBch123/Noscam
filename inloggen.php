<?php 
session_start();

require_once("connection.php");

 $name= $_POST['uname'];
 $password = $_POST['psw'];



//gegevens ophalen
 $sql = "SELECT * FROM sign_up WHERE Username = ? AND Password = ?";
 $data = array($name, $password);
 $result = getdata($sql, $data);

 $i=0;
 foreach($result as $key=>$row) {
  $i++;
 }
echo $i;
 if ($i == 1){
    $_SESSION['users']['loggedin'] = true;
    header("location:home.php");
} else {
    $_SESSION['users']['loggedin'] = false;
    header("location:index.php");
}


?>