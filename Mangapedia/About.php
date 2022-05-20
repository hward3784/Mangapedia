<!DOCTYPE html>
<html lang="en">
<head>
<title>Mangapedia - Log in</title>
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

@font-face { font-family: MangaTemple; src: url(mangatb.ttf); }

form{
  max-width:  460px;
  margin:  20px auto;
  padding: 20px;
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
  width: 100%;
  text-align: center;
  font-family: Arial;
  background-color: #f1f1f1;
  height: 1000px; /* only for demonstration, should be removed */
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
  <li style="float: right"><a href="Log_in.php"><b>Log-In</b></a></li>
  <li style="float: right"><a href="logout.php"><b>Log Out</b></a></li>
</ul>

<header>
  <h2 style="font-family:MangaTemple;">About Us</h2>
</header>

<p><center>Mangapedia began in 2022 as a site where users could discover, rate, and review new manga! The site was created due to a lack of manga-focused websites that people could use to find and talk about new manga series.</center></p>
<p><center>Be sure to follow us on <a href="#">Facebook</a>, <a href="#">Twitter</a>, and <a href="#">Instagram</a> for future updates on the site!</center></p>
<p><center>Also, be sure to join our <a href="#">official Discord server!</a></center></p>



<footer>
  <p></p>
</footer>

</body>
</html>