<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <meta name="description" content="Frivillig organistaion hvor alt går ubeskåret til de kriseramte">
    <meta name="keywords" content="lions, hjælpeorganisationer, frivilligt arbejde, lions odense, lions denmark, lions danmark, arbejde i udlandet, frivillig i udlandet, frivillig, hjælp, støt, donere">
    <title><?php echo $headTitle ?></title>
    <link rel="icon" href="/lions_1/assets/css/images/fav.ico"/>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/1a3d133268.js"></script>
  </head>
  <body>
    <div id="main-wrapper">
      <header>
        <div id="header-section-wrapper">
          <div id="logo-wrapper">
            <a href="/lions_1/index.php">
              <div id="top-logo">
              </div>
            </a>
            <div id="logo-text">
              <h3>Lions Odense</h3>
              <p>Vi gør en forskel</p>
            </div>
          </div>
          <div id="login-wrapper">
            <form id="login" action="./admin/login.php" method="post">
              <input type="text" name="username" placeholder="brugernavn">
              <input type="password" name="password" placeholder="password">
              <button type="submit" name="login-button">login</button>
            </form>
          </div>
        </div>
      </header>
      <nav>
        <div id="navbar">
          <ul>
            <li><a href="index.php"><i class="fa fa-home" id="nav-home"></i></a></li>
            <li>|</li>
            <li><a href="about.php">Om Lions</a></li>
            <li>|</li>
            <li><a href="events.php">Arrangementer</a></li>
            <li>|</li>
            <li><a href="articles.php">Artikler</a></li>
            <li>|</li>
            <li><a href="membership.php">Bliv medlem</a></li>
            <li>|</li>
            <li><a href="contact.php">Kontakt</a></li>
          </ul>
          <ul>
            <li id="donate-button"><a href="donate.php">Donér</a></li>
          </ul>
        </div>
      </nav>
