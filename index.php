<?php
  $headTitle = "Lions Odense | Vi gør en forskel";
  include('./functions.php');
  include('./assets/head_nav.php');

  $pages = getData();

?>

    <h1 class="front-text">LIONS ODENSE</h1>
    <p class="front-text">Den globale leder inden for samfunds- og humanitær tjeneste. Vi tjener for en bedre verden</p>

    <section id="front-page-news">
      <ul id="front-cards">
        <?php

          $newPages = array_reverse($pages);

          for($i = 0; $i <= 2; $i++) {
            $page = $newPages[$i];
            echo "<li>";
            include('./assets/card.php');
            echo "</li>";
          }

        ?>
      </ul>
    </section>

    <?php
      include('./assets/footer.php');
    ?>
  </body>
</html>
