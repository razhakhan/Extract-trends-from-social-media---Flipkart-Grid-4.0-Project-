<?php
  $fn = fopen("sample1.txt","r");
	$keyword = fgets($fn);
  $score = fgets($fn);
  $tweet1 = fgets($fn);
  $tweet2 = fgets($fn);
  $tweet3 = fgets($fn);
  $prod1 = fgets($fn);
  $prodlink1 = fgets($fn);
  $prod2 = fgets($fn);
  $prodlink2 = fgets($fn);
  $prod3 = fgets($fn);
  $prodlink3 = fgets($fn);
  fclose($fn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Trends on Social Media</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>

<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <h2 class="w3-center">FASHION TRENDS ON SOCIAL MEDIA</h2>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"><?php echo "1. ".$keyword ?></h2>
    <p class="w3-opacity"><i>Trending Score : <?php echo $score; ?></i></p>
    <p class="w3-center">LINKS FOR REFERENCE: </p>
  <a href= <?php echo $tweet1; ?> target="_blank">Tweet 1</a><br>
   <a href=<?php echo $tweet2; ?> target="_blank">Tweet 2</a><br>
   <a href=<?php echo $tweet3; ?> target="_blank">Tweet 3</a>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <img src="trend1/000001.jpg" class="w3-round w3-margin-bottom" alt="trend1/000001.png" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
      <div class="w3-third">
        <img src="trend1/000002.jpg" class="w3-round w3-margin-bottom" alt="trend1/000002.png" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
      <div class="w3-third">
        <img src="trend1/000003.jpg" class="w3-round" alt="trend1/000003.png" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
    </div>
  </div>

  <!-- The Flipkart Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">RELEVANT PRODUCTS ON FLIPKART</h2>
      <p class="w3-opacity w3-center"><i>Check the products below</i></p><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
          <p><?php echo $prod1; ?></p>
          <a href= <?php echo $prodlink1; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><?php echo $prod2; ?></p>
            <a href= <?php echo $prodlink2; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <!--<p><b>God Bless </b></p>-->
            <p><?php echo $prod3; ?></p>
            <a href= <?php echo $prodlink3; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $fn = fopen("sample2.txt","r");
	$keyword = fgets($fn);
  $score = fgets($fn);
  $tweet1 = fgets($fn);
  $tweet2 = fgets($fn);
  $tweet3 = fgets($fn);
  $prod1 = fgets($fn);
  $prodlink1 = fgets($fn);
  $prod2 = fgets($fn);
  $prodlink2 = fgets($fn);
  $prod3 = fgets($fn);
  $prodlink3 = fgets($fn);
  fclose($fn);
?>

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"><?php echo "2. ".$keyword ?></h2>
    <p class="w3-opacity"><i>Trending Score : <?php echo $score; ?></i></p>
    <p class="w3-center">LINKS FOR REFERENCE: </p>
  <a href= <?php echo $tweet1; ?> target="_blank">Tweet 1</a><br>
   <a href=<?php echo $tweet2; ?> target="_blank">Tweet 2</a><br>
   <a href=<?php echo $tweet3; ?> target="_blank">Tweet 3</a>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <img src="trend2/000001.jpg" class="w3-round w3-margin-bottom" alt="trend2/000001.png" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
      <div class="w3-third">
        <img src="trend2/000002.jpg" class="w3-round w3-margin-bottom" alt="Random Name" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
      <div class="w3-third">
        <img src="trend2/000003.jpg" class="w3-round" alt="image not found" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
    </div>
  </div>

  <!-- The Flipkart Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">RELEVANT PRODUCTS ON FLIPKART</h2>
      <p class="w3-opacity w3-center"><i>Check the products below</i></p><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
          <p><?php echo $prod1; ?></p>
          <a href= <?php echo $prodlink1; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><?php echo $prod2; ?></p>
            <a href= <?php echo $prodlink2; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <!--<p><b>God Bless </b></p>-->
            <p><?php echo $prod3; ?></p>
            <a href= <?php echo $prodlink3; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $fn = fopen("sample3.txt","r");
	$keyword = fgets($fn);
  $score = fgets($fn);
  $tweet1 = fgets($fn);
  $tweet2 = fgets($fn);
  $tweet3 = fgets($fn);
  $prod1 = fgets($fn);
  $prodlink1 = fgets($fn);
  $prod2 = fgets($fn);
  $prodlink2 = fgets($fn);
  $prod3 = fgets($fn);
  $prodlink3 = fgets($fn);
  fclose($fn);
?>


  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"><?php echo "3. ".$keyword ?></h2>
    <p class="w3-opacity"><i>Trending Score : <?php echo $score; ?></i></p>
    <p class="w3-center">LINKS FOR REFERENCE: </p>
  <a href= <?php echo $tweet1; ?> target="_blank">Tweet 1</a><br>
   <a href=<?php echo $tweet2; ?> target="_blank">Tweet 2</a><br>
   <a href=<?php echo $tweet3; ?> target="_blank">Tweet 3</a>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <img src="trend3/000001.jpg" class="w3-round w3-margin-bottom" alt="Random Name" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
      <div class="w3-third">
        <img src="trend3/000002.jpg" class="w3-round w3-margin-bottom" alt="Random Name" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
      <div class="w3-third">
        <img src="trend3/000003.jpg" class="w3-round" alt="Random Name" style="width:60%" onerror="this.src='safety.jfif';" width="300" height="300">
      </div>
    </div>
  </div>

  <!-- The Flipkart Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">RELEVANT PRODUCTS ON FLIPKART</h2>
      <p class="w3-opacity w3-center"><i>Check the products below</i></p><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
          <p><?php echo $prod1; ?></p>
          <a href= <?php echo $prodlink1; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><?php echo $prod2; ?></p>
            <a href= <?php echo $prodlink2; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <!--<p><b>God Bless </b></p>-->
            <p><?php echo $prod3; ?></p>
            <a href= <?php echo $prodlink3; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $fn = fopen("sample4.txt","r");
	$keyword = fgets($fn);
  $score = fgets($fn);
  $tweet1 = fgets($fn);
  $tweet2 = fgets($fn);
  $tweet3 = fgets($fn);
  $prod1 = fgets($fn);
  $prodlink1 = fgets($fn);
  $prod2 = fgets($fn);
  $prodlink2 = fgets($fn);
  $prod3 = fgets($fn);
  $prodlink3 = fgets($fn);
  fclose($fn);
?>


  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"><?php echo "4. ".$keyword ?></h2>
    <p class="w3-opacity"><i>Trending Score : <?php echo $score; ?></i></p>
    <p class="w3-center">LINKS FOR REFERENCE: </p>
  <a href= <?php echo $tweet1; ?> target="_blank">Tweet 1</a><br>
   <a href=<?php echo $tweet2; ?> target="_blank">Tweet 2</a><br>
   <a href=<?php echo $tweet3; ?> target="_blank">Tweet 3</a>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <img src="trend4/000001.jpg" class="w3-round w3-margin-bottom" alt="Random Name" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
      <div class="w3-third">
        <img src="trend4/000002.jpg" class="w3-round w3-margin-bottom" alt="Random Name" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
      <div class="w3-third">
        <img src="trend4/000003.jpg" class="w3-round" alt="Random Name" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
    </div>
  </div>

  <!-- The Flipkart Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">RELEVANT PRODUCTS ON FLIPKART</h2>
      <p class="w3-opacity w3-center"><i>Check the products below</i></p><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
          <p><?php echo $prod1; ?></p>
          <a href= <?php echo $prodlink1; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><?php echo $prod2; ?></p>
            <a href= <?php echo $prodlink2; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <!--<p><b>God Bless </b></p>-->
            <p><?php echo $prod3; ?></p>
            <a href= <?php echo $prodlink3; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
  $fn = fopen("sample5.txt","r");
	$keyword = fgets($fn);
  $score = fgets($fn);
  $tweet1 = fgets($fn);
  $tweet2 = fgets($fn);
  $tweet3 = fgets($fn);
  $prod1 = fgets($fn);
  $prodlink1 = fgets($fn);
  $prod2 = fgets($fn);
  $prodlink2 = fgets($fn);
  $prod3 = fgets($fn);
  $prodlink3 = fgets($fn);
  fclose($fn);
?>


  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"><?php echo "5. ".$keyword ?></h2>
    <p class="w3-opacity"><i>Trending Score : <?php echo $score; ?></i></p>
    <p class="w3-center">LINKS FOR REFERENCE: </p>
  <a href= <?php echo $tweet1; ?> target="_blank">Tweet 1</a><br>
   <a href=<?php echo $tweet2; ?> target="_blank">Tweet 2</a><br>
   <a href=<?php echo $tweet3; ?> target="_blank">Tweet 3</a>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <img src="trend5/000001.jpg" class="w3-round w3-margin-bottom" alt="trend5/000001.png" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
      <div class="w3-third">
        <img src="trend5/000002.jpg" class="w3-round w3-margin-bottom" alt="trend5/000002.png" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
      <div class="w3-third">
        <img src="trend5/000003.jpg" class="w3-round" alt="trend5/000003.png" onerror="this.src='safety.jfif';" style="width:60%" width="300" height="300">
      </div>
    </div>
  </div>

  <!-- The Flipkart Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">RELEVANT PRODUCTS ON FLIPKART</h2>
      <p class="w3-opacity w3-center"><i>Check the products below</i></p><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
          <p><?php echo $prod1; ?></p>
          <a href= <?php echo $prodlink1; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><?php echo $prod2; ?></p>
            <a href= <?php echo $prodlink2; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="flipkart_logo.jfif" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <!--<p><b>God Bless </b></p>-->
            <p><?php echo $prod3; ?></p>
            <a href= <?php echo $prodlink3; ?> target="_blank">VIEW ON FLIPKART</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <a href="index.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
