<?php

  include('../functions.php');

  if(isset($_POST['title'])) {
    updatePage();
    header('Location: index.php');
		exit;
  }

  $pages = getData();
  $page = $pages[$_GET['id']];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <title>Rediger Artikler</title>
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

      <section class="edit-front">
        <form method="post" action="update.php?id=<?php echo $_GET['id']; ?>">
  				<h3>Rediger Artikel</h3>
  				<div>
  					<p><label for="title">Artikel navn</label></p>
  					<div>
  						<input type="text" name="title" id="title" value="<?php echo $page['title']; ?>">
  					</div>
  				</div>
          <div>
  					<p><label for="preText">Brødtekst</label></p>
  					<div>
  						<textarea name="preText" id="preText" rows="2" cols="85" maxlength="120"><?php echo $page['preText']; ?></textarea>
  					</div>
  				</div>
  				<div>
  					<p><label for="content">Artiklens tekst</label></p>
  					<div>
  						<textarea name="content" id="content" rows="4" cols="85"><?php echo $page['content']; ?></textarea>
  					</div>
  				</div>
          <div>
  					<p><label for="image">Tilføj billede som link <i>(320x320)</i></label></p>
  					<div>
  						<textarea name="image" id="image" rows="2" cols="85"><?php echo $page['image']; ?></textarea>
  					</div>
  				</div>
  				<div>
  					<input type="submit" value="Opdater" class="update-page">
  				</div>
  			</form>
      </section>

<?php
  include('../assets/footer.php');
?>
</body>
</html>
