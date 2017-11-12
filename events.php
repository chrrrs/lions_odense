<?php
  $headTitle = "Arrangementer der gør en forskel | Lions Odense";
  include('./functions.php');
  include('./assets/head_nav.php');

  $events = getEvents();

?>

    <section id="front-page-news">
      <ul id="front-cards">
        <?php foreach ($events as $event): ?>
          <li><?php include('./assets/cardEvent.php'); ?></li>
        <?php endforeach; ?>
      </ul>
      <div id="signupModal">
        <div id="signupModal-content">
          <span id="close-signup">&times;</span>
          <h3>Tilmeld dig til arrangementet!</h3>
          <p>Send os din Email og forklar kort hvad du forventer at lave til arrangementet. Så kontakter vi dig om ledige pladser og procedure.</p>
          <form class="" action="index.html" method="post">
            <input type="email" name="email" placeholder="Email">
            <textarea name="event_function" rows="3" cols="80" placeholder="Forklar kort hvad du vil stå for under arrangementet"></textarea>
          </form>
          <button type="button" id="signupEventBtn">Tilmeld</button>
        </div>
      </div>
    </section>

    <?php
      include('./assets/footer.php');
    ?>
  </body>
</html>
