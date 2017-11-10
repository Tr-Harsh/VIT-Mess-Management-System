<?php 
$server="localhost";
$user="root";
$pass="";
$conn= mysqli_connect($server,$user,$pass,'project');
if(!$conn){
  die("connection failed");
}

if(isset($_POST['submit'])){
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $regno=$_POST['regno'];
                $branch=$_POST['branch'];
                $messtype=$_POST['messtype'];
                $query= "INSERT INTO details(fname,lname,regno,messtype,branch) VALUES('{$fname}','{$lname}','{$regno}','{$messtype}','{$branch}')";
                $result=mysqli_query($conn,$query);

                if($result){
                  echo "Successful";
                }
                else{
                  echo "Unsuccessful";
                }
            }
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Simple and light sign up form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Enter Student Details</h1>
    </header>
    
    <form class="form" action="details.php" method="POST">
        <div class="form__group">
            <input type="text" placeholder="First Name" class="form__input" name="fname" />
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Last Name" class="form__input" name="lname" />
        </div>

        <div class="form__group">
            <input type="text" placeholder="Registration Number" class="form__input" name="regno" />
        </div>

        <div class="form__group">
            <input type="text" placeholder="Mess Type" class="form__input" name="messtype"/>
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Branch" class="form__input" name="branch"/>
        </div>
        
        <input type="submit" name="submit" value="submit">
    </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
