<?php
  $headTitle = "Lions Odense | Vi gør en forskel";

  include('../functions.php');

  $pages = getData();
  $events = getEvents();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <title><?php echo $headTitle ?></title>
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

      <section id="articleSection">
        <h3>Artikler</h3>
        <table class="page-admin">
  				<thead>
  					<tr>
  						<th>Artikel Navn</th>
  						<th>Rediger Artikler</th>
  					</tr>
  				</thead>
  				<tbody>
  					<?php foreach ($pages as $id => $page): ?>
  					<tr>
  						<td><?php echo $page['title']; ?></td>
  						<td>
  							<a href="update.php?id=<?php echo $id; ?>"><i class="fa fa-pencil fa-border fa-lg"></i></a>
  							<a href="deleteArticle.php?id=<?php echo $id; ?>"><i class="fa fa-trash-o fa-border fa-lg"></i></a>
  						</td>
  					</tr>
  					<?php endforeach; ?>
  				</tbody>
  			</table>
        <h3>Arrangementer</h3>
        <table class="page-admin">
  				<thead>
  					<tr>
  						<th>Arrangement Navn</th>
  						<th>Rediger Arrangementer</th>
  					</tr>
  				</thead>
  				<tbody>
  					<?php foreach ($events as $id => $event): ?>
  					<tr>
  						<td><?php echo $event['title']; ?></td>
  						<td>
  							<a href="updateEvents.php?id=<?php echo $id; ?>"><i class="fa fa-pencil fa-border fa-lg"></i></a>
  							<a href="deleteEvents.php?id=<?php echo $id; ?>"><i class="fa fa-trash-o fa-border fa-lg"></i></a>
  						</td>
  					</tr>
  					<?php endforeach; ?>
  				</tbody>
  			</table>
      </section>

<?php
  include('../assets/footer.php');
?>
</body>
</html>
