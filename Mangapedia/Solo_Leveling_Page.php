<?php   

  $conn = mysqli_connect('localhost', 'root', 'TaCe480#%', 'mangapedia');

  $sql = "SELECT * FROM manga WHERE name = 'Solo Leveling'";

  $result = mysqli_query($conn, $sql);

  $solo_leveling = mysqli_fetch_all($result, MYSQLI_ASSOC);

   mysqli_free_result($result);

  mysqli_close($conn);
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Mangapedia - Solo Leveling</title>
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
  <h2 style="font-family:MangaTemple;">Solo Leveling</h2>
</header>

<section>
  <article>
    <img src="Images\SoloLeveling.jpg" alt="Solo Leveling">

  <div class="container">
  <div class="row">

    <?php foreach($solo_leveling as $sl) { ?>

     
        <div class="card z-depth-0">
          <div class="card-content center">
            <h6><b>Title:</b> <?php echo htmlspecialchars($sl['name']); ?></h6>
            <h6><b>Start Date:</b> <?php echo htmlspecialchars($sl['start_date']); ?></h6>
            <h6><b>Status:</b> <?php echo htmlspecialchars($sl['status']); ?></h6>
            <h6><b>Chapters:</b> <?php echo htmlspecialchars($sl['chapters']); ?></h6>
            <h6><b>Genres:</b> <?php echo htmlspecialchars($sl['genre_1']) . ", " . htmlspecialchars($sl['genre_2']) . ", " . htmlspecialchars($sl['genre_3']); ?></h6>
    </div>
   </div>
 <?php } ?>
 </div>
</div>
  </article>

  <aside>
    <h4 style="font-family: MangaTemple;">Synopsis</h4>
    <p>In a world where awakened beings called “Hunters” must battle deadly monsters to protect humanity, Sung Jinwoo, nicknamed “the weakest hunter of all mankind,” finds himself in a constant struggle for survival. One day, after a brutal encounter in an overpowered dungeon wipes out his party and threatens to end his life, a mysterious System chooses him as its sole player: Jinwoo has been granted the rare opportunity to level up his abilities, possibly beyond any known limits. Follow Jinwoo’s journey as he takes on ever-stronger enemies, both human and monster, to discover the secrets deep within the dungeons and the ultimate extent of his powers. </p>
    <p>(Source: Tappytoon)</p>
    <br><br>
    
    <h4 style="font-family: MangaTemple;">Staff</h4>
    <p>Seong-Rak Jang - Art</p>
    <p>Chu-Gong - Original Story</p>
        <br><br>
    <h4 style="font-family: MangaTemple;">Reviews</h4>
<div class="reviews"></div>
<script>
const reviews_page_id = 4;
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