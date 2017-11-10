  <?php 
$server="localhost";
$user="root";
$pass="";
$conn= mysqli_connect($server,$user,$pass,'project');
if(!$conn){
  die("connection failed");
}

if(isset($_POST['submit'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $query= "INSERT INTO login(user,pass,email) VALUES('{$user}','{$pass}','{$email}')";
                $sql=mysqli_query($conn,$query);

                if($sql){
                  echo "Successful";
                }
                else{
                  echo "Unsuccessful";
                }

                  }
if(isset($_POST['signin'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $q="SELECT * FROM login";
            $result = mysqli_query($conn, $q);
            while($row = $result->fetch_assoc()){
              if(($row["user"]==$username)&&($row["pass"]==$password)){
                echo "Welcome";
              }
            }    



}

                  

 ?>





<!DOCTYPE html>
<html>
  <head>
  

    <meta charset="utf-8">
    <title>MediReady|Login</title>
    <style type="text/css">
    body{
  background:#292929;
}

#login{/*positioning of the username,password,sign in*/
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-100%);
}

#login h2{/*formatting of the "SIGN IN" text*/
  text-align: center;
  color: white;
  font-family:sans-serif;
  font-size: 35px;
}

#login input{
  display: block;
  width: 320px;
  height: 40px;
  padding: 10px;
  font-size: 20px;
  font-family: sans-serif;
  color: white;
  background: rgba(0,0,0,0.3);
  outline:none;
  border:1px solid rgba(0,0,0,0.3);
  border-radius:5px;
  box-shadow: inset 0px -5px 45px rgba(100,100,100,0.2),0px 1px 1px rgba(255,255,255,0.2);
  margin-bottom: 10px;
}

#login #login-btn{
  background: #55acee;
  font-size: 18px;
  text-align: center;
  vertical-align: middle;
}

#not{/*positioning of the not a member yet?*/
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,0%);
}

#not{/*formatting of the "SIGN IN" text*/
  text-align: center;
  color: white;
  font-family:sans-serif;
  font-size: 35px;
}


#register{/*positioning of the username,password,sign in*/
  position:absolute;
  top:35%;
  left:50%;
  transform:translate(-50%,70%);
}

#register h2{/*formatting of the "SIGN IN" text*/
  text-align: center;
  color: white;
  font-family:sans-serif;
  font-size: 35px;
}

#register input{
  display: block;
  width: 320px;
  height: 40px;
  padding: 10px;
  font-size: 20px;
  font-family: sans-serif;
  color: white;
  background: rgba(0,0,0,0.3);
  border-radius:5px;
  box-shadow: inset 0px -5px 45px rgba(100,100,100,0.2),0px 1px 1px rgba(255,255,255,0.2);
  margin-bottom: 10px;
}

#register #register-btn{
  background: #55acee;
  font-size: 18px;
  text-align: center;
  vertical-align: middle;

}


    </style>
  </head>
  <body>

    <div id="login">
      <form action="find.php" method="POST">
        <h2>Sign In</h2>
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="submit" id="login-btn" name="signin" value="Sign In">
      </form>
    </div>

    <div id="not">
    <h1>Not a member yet?</h1>
    </div>

    <div id="register">
      <form action="index.html" method="POST">
        <h2>Register</h2>
        <input type="text" name="user" placeholder="Enter Username" required>
        <input type="text" name="email" placeholder="Enter email address" required>
        <input type="password" name="pass" placeholder="Enter Password" required >
        <input type="submit" id="register-btn" name="submit" value="Register">        
        
      </form>
      
    </div>

  </body>
</html>
<?php

mysqli_close($conn);
?>
