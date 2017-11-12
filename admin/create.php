<?php

  include('../functions.php');

  if(isset($_POST['title'])) {
    savePage();
    header('Location: index.php');
		exit;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <title>Skriv Artikler | Lions Odense</title>
    <link rel="icon" href="/lions_1/assets/css/images/fav.ico"/>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/1a3d133268.js"></script>
    <script src="../assets/script.js"></script>
  </head>
  <body>
    <div id="main-wrapper">
      <header>
        <div id="header-section-wrapper">
          <div id="logo-wrapper">
            <a href="index.php">
              <div id="top-logo">
              </div>
            </a>
            <div id="logo-text">
              <h3>Lions Odense</h3>
              <p>Vi gør en forskel</p>
            </div>
          </div>
          <div id="login-wrapper">
            <form id="login" action="../index.php" method="post">
              <button type="submit" name="login-button">log ud</button>
            </form>
          </div>
        </div>
      </header>
      <nav>
        <div id="navbar">
          <ul>
            <li><a href="index.php"><i class="fa fa-home" id="nav-home"></i></a></li>
            <li>|</li>
            <li><a href="create.php">Skriv artikel</a></li>
            <li>|</li>
            <li><a href="createEvents.php">Lav arrangement</a></li>
          </ul>
        </div>
      </nav>

      <section class="write-article">
        <form method="post" action="create.php">
  				<h3>Skriv ny artikel</h3>
  				<div>
  					<p><label for="title">Artikel navn</label></p>
  					<div>
  						<input type="text" name="title" id="title">
  					</div>
  				</div>
          <div>
  					<p><label for="preText">Brødtekst</label></p>
  					<div>
  						<textarea name="preText" id="preText" rows="2" cols="85" maxlength="120"></textarea>
  					</div>
  				</div>
  				<div>
  					<p><label for="content">Artikel tekst</label></p>
  					<div>
  						<textarea name="content" id="content" rows="4" cols="85"></textarea>
  					</div>
  				</div>
          <div>
  					<p><label for="image">Tilføj billede med link <i>(320x320)</i></label></p>
  					<div>
  						<textarea name="image" id="image" rows="2" cols="85"></textarea>
  					</div>
  				</div>
  				<div>
  					<input type="submit" value="Gem" class="create-page">
  				</div>
  			</form>
      </section>

<?php
  include('../assets/footer.php');
?>
</body>
</html>
