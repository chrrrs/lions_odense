<?php

  include('../functions.php');

  if(isset($_POST['title'])) {
    saveEvent();
    header('Location: index.php');
		exit;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <title>Lav arrangementer | Lions Odense</title>
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
        <form method="post" action="createEvents.php">
  				<h3>Lav nyt arrangement</h3>
  				<div>
  					<p><label for="title">Arrangement navn</label></p>
  					<div>
  						<input type="text" name="title" id="title">
  					</div>
  				</div>
          <div>
  					<p><label for="time">Dato og tidspunkt</label></p>
  					<div>
  						<textarea name="time" id="time" rows="1" cols="85"></textarea>
  					</div>
  				</div>
  				<div>
  					<p><label for="content">Arrangement tekst</label></p>
  					<div>
  						<textarea name="content" id="content" rows="4" cols="85"></textarea>
  					</div>
  				</div>
          <div>
  					<p><label for="eImage">Tilføj billede med link <i>(960x320)</i></label></p>
  					<div>
  						<textarea name="eImage" id="eImage" rows="2" cols="85"></textarea>
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
