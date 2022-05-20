<?php 

  $conn = mysqli_connect('localhost', 'root', 'TaCe480#%', 'mangapedia');


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Mangapedia</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="reviews.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = [
      "Berserk",
      "Chainsaw Man",
      "JoJo's Bizarre Adventure",
      "Monster",
      "Vinland Saga",
      "Vagabond",
      "One Piece",
      "Slam Dunk",
      "My Hero Academia",
      "Solo Leveling",
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>


<style type="text/css">

.img__wrap {
  position: relative;
  height: 361px;
  width: 230px;
}

.img__description {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(29, 106, 154, 0.72);
  color: #fff;
  visibility: hidden;
  opacity: 0;

  /* transition effect. not necessary */
  transition: opacity .2s, visibility .2s;
}

.img__wrap:hover .img__description {
  visibility: visible;
  opacity: 1;
}


* {
  box-sizing: border-box;
}
@font-face { font-family: MangaTemple; src: url(mangatb.ttf); }

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  font-family: Arial;
  overflow: hidden;
  background-color: #ccc;
}

/* Style the header */
header {
  background-color: #333;
  padding: 30px;
  text-align: center;
  font-size: 50px;
  font-family: MangaTemple;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 18%;
  height: 500px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  font-family: Arial;
  list-style-type: none;
  padding: 0;
}

li {
  
}

li a {
  display: block;
  color: black;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
	background-color: #111;
    color: white;
}

article {
  float: left;
  padding: 20px;
  width: 82%;
  background-color: #f1f1f1;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #333;
  padding: 10px;
  text-align: left;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>



<body>
<ul>
  <li style="float: left"><a href="index.php"><b>Home</b></a></li>
  <li style="float: left"><a href="#"><b>Profile</b></a></li>
  <li style="float: left"><a href="About.php"><b>About</b></a></li>
  <li style="float: right"><a href="logout.php"><b>Log Out</b></a></li>
  <li style="float: right"><a href="Log_in.php"><b>Log In</b></a></li>
</ul>

<header>
  <h1 style="font-family:MangaTemple;">MANGAPEDIA</h1>
  <p style="font-family:Arial;">Discover and Rate New Manga<p>
</header>

<section>
  <nav>
  	<h1 style="font-family:MangaTemple;">Explore a Genre:</h1>
    <ul>
      <li><a href="#">Action</a></li>
      <li><a href="#">Adventure</a></li>
      <li><a href="#">Comedy</a></li>
      <li><a href="#">Fantasy</a></li>
      <li><a href="#">Horror</a></li>
      <li><a href="#">Mystery</a></li>
      <li><a href="#">Romance</a></li>
      <li><a href="#">Sci-fi</a></li>
      <li><a href="#">Slice of Life</a></li>
    </ul>
  </nav>
  
  <article>
    <h1 style="font-family:MangaTemple;">Popular Manga:</h1>
    <div class="img__wrap" style="float: left" style="width: 20%">
      <img style="padding:20px" src="Images\ChainsawMan.png" alt="Chainsaw Man" width="230" height="361">
      <a href="Chainsaw_Man_Page.php"><p class="img__description" style="text-align:center;">Chainsaw Man</p></a>
    </div>
    
    <div class="img__wrap" style="float: left" style="width: 20%">
      <img style="padding:20px" src="Images\OnePiece.jpg" alt="OnePiece" width="230" height="361">
      <a href="One_Piece_Page.php"><p class="img__description" style="text-align:center;">One Piece</p></a>
    </div>
    
    <div class="img__wrap" style="float: left" style="width: 20%">
      <img style="padding:20px" src="Images\SlamDunk.png" alt="Slam Dunk" width="230" height="361">
      <a href="Slam_Dunk_Page.php"><p class="img__description" style="text-align:center;">Slam Dunk</p></a>
    </div>

    <div class="img__wrap" style="float: left" style="width: 20%">
      <img style="padding:20px" src="Images\SoloLeveling.jpg" alt="Solo Leveling" width="230" height="361">
      <a href="Solo_Leveling_Page.php"><p class="img__description" style="text-align:center;">Solo Leveling</p></a>
    </div>

    <div class="img__wrap" style="float: left" style="width: 20%">
      <img style="padding:20px" src="Images\MHA.jpg" alt="My Hero Academia" width="230" height="361">
      <a href="MHA_Page.php"><p class="img__description" style="text-align:center;">My Hero Academia</p></a>
    </div>
      
  </article>

</section>

<section>
<nav>
  	<h1 style="font-family:MangaTemple;">Follow Us!</h1>
    <ul>
      <li><a href="#">Facebook</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Instagram</a></li>
      <li><a href="#">Discord</a></li>
    </ul>
  </nav>
  
  <article>
    <h1 style="font-family:MangaTemple;">Top-Rated Manga:</h1>
    <div class="img__wrap" style="float: left" style="width: 20%">
      <img style="padding:20px" src="Images\Berserk.jpg" alt="Berserk" width="230" height="361">
      <a href="Berserk_Page.php"><p class="img__description" style="text-align:center;">Berserk</p></a>
    </div>
    
    <div class="img__wrap" style="float: left" style="width: 20%">
      <img style="padding:20px" src="Images\JoJo.png" alt="JoJo no Kimyou na Bouken" width="230" height="361">
      <a href="Jojo_Page.php"><p class="img__description" style="text-align:center;">JoJo no Kimyou na Bouken: Steel Ball Run</p></a>
    </div>
    
    <div class="img__wrap" style="float: left" style="width: 20%">
      <img style="padding:20px" src="Images\Vagabond.png" alt="Vagabond" width="230" height="361">
      <a href="Vagabond_Page.php"><p class="img__description" style="text-align:center;">Vagabond</p></a>
    </div>

    <div class="img__wrap" style="float: left" style="width: 20%">
      <img style="padding:20px" src="Images\Monster.jpg" alt="Monster" width="230" height="361">
      <a href="Monster_Page.php"><p class="img__description" style="text-align:center;">Monster</p></a>
    </div>

    <div class="img__wrap" style="float: left" style="width: 20%">
      <img style="padding:20px" src="Images\VinlandSaga.jpg" alt="Vinland Saga" width="230" height="361">
      <a href="Vinland_Saga_Page.php"><p class="img__description" style="text-align:center;">Vinland Saga</p></a>
    </div>
      
  </article>

</section>

<footer>
  <p></p>
</footer>

</body>
</html>