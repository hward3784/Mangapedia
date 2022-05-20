<?php   

  $conn = mysqli_connect('localhost', 'root', 'TaCe480#%', 'mangapedia');

  $sql = "SELECT * FROM manga WHERE name = 'Vagabond'";

  $result = mysqli_query($conn, $sql);

  $vagabond = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
   mysqli_free_result($result);

  mysqli_close($conn);
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Mangapedia - Vagabond</title>
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
<link href="reviews.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

@font-face { font-family: MangaTemple; src: url(mangatb.ttf); }

div.stars {
  width: 270px;
  display: inline-block;
}
input.star { display: none; }
label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}
input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}
input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-1:checked ~ label.star:before { color: #F62; }
label.star:hover { transform: rotate(-15deg) scale(1.3); }
label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}



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
  font-size: 25px;
  font-family: MangaTemple;
  color: white;
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
  width: 30%;
  text-align: center;
  font-family: Arial;
  background-color: #f1f1f1;
  height: 1200px; /* only for demonstration, should be removed */
}

aside {
  float: right;
  padding: 20px;
  width: 65%;
  font-family: Arial;
  background-color: #f1f1f1;
  height: 1200px;
}


section::after {
  content: "";
  display: table;
  clear: both;
}


footer {
  background-color: #333;
  padding: 10px;
  text-align: center;
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
  <h2 style="font-family:MangaTemple;">Vagabond</h2>
</header>

<section>
  <article>
    <img src="Images\Vagabond.png" alt="Vagabond">


<div class="container">
  <div class="row">

    <?php foreach($vagabond as $vb) { ?>

     
        <div class="card z-depth-0">
          <div class="card-content center">
            <h6><b>Title:</b> <?php echo htmlspecialchars($vb['name']); ?></h6>
            <h6><b>Start Date:</b> <?php echo htmlspecialchars($vb['start_date']); ?></h6>
            <h6><b>Status:</b> <?php echo htmlspecialchars($vb['status']); ?></h6>
            <h6><b>Chapters:</b> <?php echo htmlspecialchars($vb['chapters']); ?></h6>
            <h6><b>Volumes:</b> <?php echo htmlspecialchars($vb['volumes']); ?></h6>
            <h6><b>Genres:</b> <?php echo htmlspecialchars($vb['genre_1']) . ", " . htmlspecialchars($vb['genre_2']) . ", " . htmlspecialchars($vb['genre_3']); ?></h6>
    </div>
   </div>
 <?php } ?>
 </div>
</div>
  </article>

  <aside>
    <h4 style="font-family: MangaTemple;">Synopsis</h4>
	<p>At seventeen years of age, Miyamoto Musashi--still known by his childhood name, Shinmen Takezo--was a wild young brute just setting out along the way of the sword.

In the aftermath of the epic Battle of Sekigahara, Takezo finds himself a fugitive survivor on the losing side of the war. Takezo's vicious nature has made him an outcast even in his own village, and he is hunted down like an animal. At this crucial crossroads in Takezo's life, an eccentric monk and a childhood friend are the only ones who can help him find his way. </p>
    <p>(Source: Viz Media)</p>
    <br><br>
    
    <h4 style="font-family: MangaTemple;">Staff</h4>
    <p>Takehiko Inoue - Story & Art</p>
	<p>Eiji Yoshikawa - Story</p>
	<p>Yasuhisa Hara - Assistant</p>
	<p>Katsumi Tatsuzawa - Assistant</p>
      <br><br>
    <h4 style="font-family: MangaTemple;">Reviews</h4>
<div class="reviews"></div>
<script>
const reviews_page_id = 8;
fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
  document.querySelector(".reviews").innerHTML = data;
  document.querySelector(".reviews .write_review_btn").onclick = event => {
    event.preventDefault();
    document.querySelector(".reviews .write_review").style.display = 'block';
    document.querySelector(".reviews .write_review input[name='name']").focus();
  };
  document.querySelector(".reviews .write_review form").onsubmit = event => {
    event.preventDefault();
    fetch("reviews.php?page_id=" + reviews_page_id, {
      method: 'POST',
      body: new FormData(document.querySelector(".reviews .write_review form"))
    }).then(response => response.text()).then(data => {
      document.querySelector(".reviews .write_review").innerHTML = data;
    });
  };
});
</script>

  </aside>

</section>

<footer>
  <p></p>
</footer>

</body>
</html>