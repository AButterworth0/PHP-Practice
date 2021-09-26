<?php 

  if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo "Hello " . $username . ". <br> Your password is " . $password;

    $names = ["Ariella", "Andy"];

    if(strlen($username) <  5){
      echo "Username has to be longer that 5 charachters<br>";
    }

    if(!in_array($username, $names)){
      echo "Yosu dont have an account";

    }else
    {
      echo "Welcome back " . $username;
    }

  }


?>
<br>
<button><a href="index.php"> Return </a></button>