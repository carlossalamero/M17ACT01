 <?php
session_start();

require_once "basedatos.php";
$user = $passwd = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["user"]))){
      $username_err = "Please enter username.";
    } else{
      $user = trim($_POST["user"]);
    }
    
    if(empty(trim($_POST["passwd"]))){
      $password_err = "Please enter your password.";
    }else{
      $passwd = trim($_POST["passwd"]);
    }

 $sql = "select * from m17act01 where username='$user' and password='$passwd'";
$result = $conn->query($sql);
 if ($result = num_rows!== 0) {
   $_SESSION["loggedin"] = true;
  header("location: Bienvenida.php");  
 } else {

  echo "0 results";
mysqli_close($conn);
}
 }

 
 ?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel="stylesheet" href="style1.css"></link>
<title>Benvingut a M17</title> 
</head>
<body>

<h1>Registrar-se como nou usuari</h1>
<form action="Ex3.php" method="post"/>
<h2>
<p>e-mail: <input type="text" name="email" size="35"/></p>
<p>contrasenya: <input type="password" name="contras"/></p>
</h2>
<input type="submit"/>
</form>

</body>
</html>