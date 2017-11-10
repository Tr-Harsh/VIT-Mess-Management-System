<!DOCTYPE html>
<html>
<title>Food Item Details</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Homepage" />
        <meta name="keywords" content="VIT, vitmess, vit mess management, vit chennai mess system" />
        <meta name="author" content="bajajra" />
        <link rel="shortcut icon" href="r.jpeg" type="image/x-icon">
        <link rel="icon" href="r.jpeg" type="image/x-icon">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="find.php" onclick="w3_close()" class="w3-bar-item w3-button">North Mess</a>
  <a href="find.php" onclick="w3_close()" class="w3-bar-item w3-button">South Mess</a>
  <a href="find.php" onclick="w3_close()" class="w3-bar-item w3-button">Special Mess</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16"><a href="index.html">Home</a></div>
    <div class="w3-center w3-padding-16">List of food Items</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="chola puri.jpg" alt="Sandwich" width=100 height="100">
      <h3>Chola puri</h3>
      <p>Cost: 8</p>
    </div>
    <div class="w3-quarter">
      <img src="chutney.jpg" alt="Steak" width=100 height="100">
      <h3>Chutney</h3>
      <p>Cost: 2</p>
    </div>
    <div class="w3-quarter">
      <img src="coconut milk.jpg" alt="Cherries" width=100 height="100">
      <h3>Coconut Milk</h3>
      <p>Cost: 5</p>
      
    </div>
    <div class="w3-quarter">
      <img src="cornflakes.jpg" alt="Pasta and Wine" width=100 height="100">
      <h3>Cornflakes</h3>
      <p>Cost: 6</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="dahi papdi.jpg" alt="Popsicle" width=100 height=100>
      <h3>Dahi Papdi</h3>
      <p>Cost: 7</p>
    </div>
    <div class="w3-quarter">
      <img src="dal.jpg" alt="Salmon" width=100 height="100">
      <h3>Dal</h3>
      <p>Cost: 5</p>
    </div>
    <div class="w3-quarter">
      <img src="dry cake.jpg" alt="Sandwich" width=100 height="100">
      <h3>Dry Cake</h3>
      <p>Cost: 10</p>
    </div>
    <div class="w3-quarter">
      <img src="egg curry.jpg" alt="Croissant" width=100 height="100">
      <h3>Egg curry</h3>
      <p>Cost: 8</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="fooditems.php" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="fooditems2.php" class="w3-bar-item w3-black w3-button">2</a>
      <a href="fooditems3.php" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="fooditems4.php" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="fooditems5.php" class="w3-bar-item w3-button w3-hover-black">5</a>
      <a href="fooditems6.php" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Me, The Code Monster</h3><br>
    <img src="rahul.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="80" height="53">
    <div class="w3-padding-32">
      <h4><b>HARSH TRIPATHI</b></h4>
      <h6><i></i></h6>
      <p></p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>CREATED BY TEAM HASC</p>
      
    </div>
  
    <!--<div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>-->

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Food</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">VIT</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chennai Campus</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Special Mess</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">North Mess</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">South Mess</span>
        <!--<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>-->
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
