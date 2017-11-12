<?php
  $headTitle = "Artikler | Lions Odense";
  include('./functions.php');
  include('./assets/head_nav.php');

  $pages = array_reverse(getData());

?>

    <form id="article-search">
      <input type="text" name="search-articles" placeholder="Søg på artikler..." id="article-input">
      <button type="button" id="article-search-button">Søg</button>
    </form>

    <section id="front-page-news">
      <ul id="front-cards">
        <?php foreach ($pages as $i => $page): ?>
        <li><?php include('./assets/card.php'); ?></li>
        <?php endforeach; ?>
      </ul>
    </section>

    <?php
      include('./assets/footer.php');
    ?>
  </body>
</html>
