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
<head>
<title>Data</title>
<!--<link rel="stylesheet" type="text/css" href="../css_1/data.css">-->
<style type="text/css">

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 20px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}





/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
</style>
<script type="text/javascript">
  
  $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
</head>
<?php
echo "<body>";
echo "<section>";
  
  echo"<h1>Search Results:</h1>";
  
  echo "<div class='tbl-header'>";
    echo "<table cellpadding='0' cellspacing='0' border='0'>";
      echo"<thead>";
        echo"<tr>";
          echo"<th>FIRST NAME</th>";
          echo"<th>LAST NAME</th>";
          echo"<th>REGISTRATION NUMBER</th>";
          echo"<th>BRANCH</th>";
          //echo"<th>Doctor</th>";
          //echo"<th>Contact</th>";
          ///echo"<th>Area</th>";
          echo"</tr>";
      echo"</thead>";
    echo"</table>";
  echo"</div>"; 
  echo "<div class='tbl-content'>";
    
      echo "<tbody>";
        
        $messtype=$_GET['messtype'];
               

echo "<table cellpadding='0' cellspacing='0' border='0'>";
                $query= "SELECT * FROM  details WHERE messtype='$messtype'";
                $result=mysqli_query($conn,$query);
                $counter = mysqli_num_rows($result);
                //$tmp=mysqli_fetch_array($result);
                //echo $tmp[2];
                /*for ($rows=array(); $tmp=mysqli_fetch_array($result);) { 
                  # code...
                  $rows[]=$tmp;

                }*/
                for($i = 0; $i < $counter; $i++){
                $row = $result -> fetch_assoc();
                echo "<link rel='stylesheet' type='text/css' href='../css_1/data.css'>";
         echo "<tr>";
                    
                    //echo "<td style='padding: 15px;text-align: left;vertical-align:middle;font-weight: 300;font-size:20px;color:#fff;border-bottom: solid 1px rgba(255,255,255,0.1);'>".$row['symptom']."</td>";
                    echo "<td>".$row['fname']."</td>";
                    echo "<td>".$row['lname']."</td>";
                    echo "<td>".$row['regno']."</td>";
                    echo "<td>".$row['branch']."</td>";
                    //echo "<td>".$row['mob']."</td>";
                    //echo "<td>".$row['area']."</td>";

         echo       "</tr>";
                 
                  }
                  echo "</table>";
      echo"</tbody>";
    echo"</table>";
  echo"</div>";
echo"</section>";



echo"</body>";
?>
</html>