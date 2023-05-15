<?php
($_POST['psw']){
$password = $_POST['psw'];
echo "Your password is: $password";

  
password_hash($password, PASSWORD_DEFAULT);

echo "Encrypted Password: $hash";

echo "<br> <br>"
}

?>