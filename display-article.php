<?php
  $headTitle = "Læser artikel | Lions Odense";

  include('./functions.php');
  include('./assets/head_nav.php');

  $page = singlePage(true);


?>

    <div id="article-container">
      <h2><?php echo $page['title']; ?></h2>
      <i><?php echo $page['preText']; ?></i>
      <p><?php echo $page['content']; ?></p>
    </div>

    <?php
      include('./assets/footer.php');
    ?>
  </body>
</html>
