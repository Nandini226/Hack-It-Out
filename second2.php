<!DOCTYPE html>
<html>
<title>Product</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size: 16px;}
/* img {margin-bottom: -8px;} */
.mySlides {display: none;}
body{
    overflow-x: hidden;
    overflow-y: hidden;
}
</style>
<body class="w3-content w3-black" style="max-width:500px;">

<!-- Header with Slideshow -->
<header class="w3-display-container w3-center">
  <button class="w3-button w3-block w3-green w3-hide-large w3-hide-medium" onclick="document.getElementById('download').style.display='block'">Pin Point </button>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="dress4a.jpg" alt="Image 1" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Locate Stores</h1>
        <hr class="w3-opacity">
        <p><a href="page3.php"><button class="w3-button w3-block w3-green w3-round" onclick="document.getElementById('download').style.display='block'">Pin Point </button></a></p>
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="dress4b.jpg" alt="Image 1" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Locate Stores</h1>
        <hr class="w3-opacity">
        <p><a href="page3.php"><button class="w3-button w3-block w3-green w3-round" onclick="document.getElementById('download').style.display='block'">Pin Point </button></a></p>
      </div>
    </div>
  </div>

  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="dress4c.jpg" alt="Image 1" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Locate Stores</h1>
        <hr class="w3-opacity">
        <p><a href="page3.php"><button class="w3-button w3-block w3-green w3-round" onclick="document.getElementById('download').style.display='block'">Pin Point </button></a></p>
      </div>
    </div>
  </div>
  
  
  <a class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" onclick="plusDivs(1)">Take Tour <i class="fa fa-angle-right"></i></a>
  <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)">Take Tour <i class="fa fa-angle-right"></i></a>
</header>



<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
