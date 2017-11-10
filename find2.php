





<?php 



$server="localhost";
$user="root";
$pass="";
$conn= mysqli_connect($server,$user,$pass,'project');
if(!$conn){
  die("connection failed");
}







 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"><!--adjusts the site size on mobile r desktop-->
    <meta name="description" content="fast treatment solutions and first aid">
    <meta name="keywords" content="find doctors,find hospitals,efficient">
    <meta name="author" content="Anant Narayan Dash">
    <title>Find Food Item</title>
    <style type="text/css">
    body{
  font: 15px/1.5 Arial, Helvetica,sans-serif;
  padding:0;
  margin:0;
  background-color:#f4f4f4;

}

/* Global */
.container{
  width:80%;
  margin:auto;
  overflow:hidden;
}

.button_1{/*Formatting the submit button*/
  height:38px;
  background:#e8491d;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
}

ul{
  margin:0;
  padding:0;
}


/*header*/
header{
  background:#35424a;/*This is colour and formatting for header*/
  color:#ffffff;
  padding-top:30px;
  min-height:70px;
  border-bottom:#e8491d 3px solid;
}

header a{/*This for formatting the nav buttons*/
  color:#ffffff;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
}

header li{/*Make the nav buttons horizontal*/
  float:left;
  display:inline;
  padding: 0 20px 0 20px;
}


header #branding{/*THe following three are more settings for nav buttons*/
  float:left;
}

header #branding h1{
  margin:0;
}

header nav{
  float:right;
  margin-top:10px;
}

/*colour of the header*/
header .highlight, header .current a{
  color:#e8491d;
  font-weight:bold;
}

/*add hover to the nav buttons*/
header a:hover{
  color:#cccccc;/*gray clour*/
  font-weight:bold;
}

/* Showcase */
#showcase{/*image formatting in the bachground*/
  min-height:400px;
  background:url('mess.jpg') no-repeat -300px -100px;
  text-align:center;
  color:#ffffff;
}

#showcase h1{
  margin-top:100px;
  font-size:55px;
  margin-bottom:10px;
}

#showcase p{
  font-size:20px;
}

/* Newsletter */
#newsletter{/*Formatting the newsletter appearance*/
  padding:5px;
  color:#ffffff;
  background:#35424a
}

#newsletter h1{/*Keep the newsletter name to the left*/
  float:left;
}

#newsletter form {/*Keep the newsletter form to the right*/
  float:right;
  margin-top:15px;
}

#newsletter input[type="email"]{/*formatting the form*/
  padding:4px;
  height:25px;
  width:250px;
}

/* Boxes */
#boxes{
  margin-top:10px;
}

#boxes .box{/*Each individual box formatting*/
  float:center;
  text-align: center;
  width:100%;
  padding:10px;
}

#boxes .box img{/*image size*/
  width:300px;
}

#main{/*positioning of the username,password,sign in*/
  position:absolute;
  top:80%;
  left:50%;
  transform:translate(-50%,-100%);
}

#main h2{/*formatting of the "SIGN IN" text*/
  text-align: center;
  color: white;
  font-family:sans-serif;
  font-size: 35px;
}




footer{
  padding:20px;
  margin-top:135px;
  color:#ffffff;
  background-color:#e8491d;
  text-align: center;
}



    </style>
    <!--<link rel="stylesheet" href="..\css_1\style_know_dsease.css">-->
  </head>
  <body>
    <header><!--THis is the header showing the nav buttons and logo-->
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">VIT MESS MANAGEMENT</span></h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="find.php">Search for Food Items</a></li>
            <li><a href="index.html">LOGOUT</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="mess1.jpg">
          <h3>Search for Student Details</h3>
          <!--<p>Find the course of the treatment from our database of diseases,their symptoms and causes.</p>-->
          
        </div>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <form class="quote" action="data2.php?messytype" method="get">
          <div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <label><b>ENTER MESS TYPE:</b></label><br>
            <input type="text" name="messtype" placeholder="Mess Type">
                    <input type="submit" id="register-btn" name="submit" value="Search">        

          </div>
        </form>
      </div>
    </section>

    <footer>
      <p>VIT MESS MANAGEMENT</p>
    </footer>

  </body>
</html>
