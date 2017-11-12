<?php
  $headTitle = "Bliv medlem | Lions Odense";
  include('./assets/head_nav.php');

?>
    <section id="member-section">
      <div id="member-info-top">
        <h2>Bliv medlem i Lions Odense</h2>
        <p>En Lions klub er en lokal gruppe aktive ildsjæle, der arbejder frivilligt for at hjælpe andre, der har behov for hjælp. Ud fra mottoet for Lions klubber overalt i verden 'We serve'. 'Vi hjælper'. Klubbens formål er at gennemføre aktiviteter, hvor medlemmerne bidrager med deres egen gratis arbejdskraft. Derved skabes et overskud, som ubeskåret går til at hjælpe humanitært og kulturelt. Dernæst bestræber klubben sig på at skabe et godt kammeratskab og sammenhold i en munter og afslappet atmosfære. Der arrangeres f.eks. foredrag, virksomhedsbesøg eller sociale events med ledsager, og du bliver også en del af Lions verdensomspændende hjælpeorganisation.</p>
      </div>
      <div id="newsletter">
        <h2>Tilmeld dig vores nyhedsbrev</h2>
        <form action="membership.php" method="post" id="newsletter-container">
          <input type="text" placeholder="Email">
          <button type="button" id="signupBtn">Tilmeld</button>
        </form>
      </div>
      <div id="member-info-bottom">
        <div class="member-contact">
          <h3>Torben Pedersen</h3>
          <p><i>Præsident</i></p>
          <p>Tlf. +45 26 19 42 50</p>
        </div>
        <div class="member-contact">
          <h3>Keld Andersen</h3>
          <p><i>Vicepræsident</i></p>
          <p>Tlf. +45 66 17 61 55</p>
        </div>
        <div class="member-contact">
          <h3>Ole Eis-Hansen</h3>
          <p><i>Sekretær</i></p>
          <p>Tlf. +45 20 45 12 43</p>
        </div>
      </div>

      <div id="newsletterModal">
        <div id="newsletterModal-content">
          <span id="close-newsletter">&times;</span>
          <p>Du er nu tilmeldt nyhedsbrevet fra Lions Odense</p>
        </div>
      </div>
    </section>


    <?php
      include('./assets/footer.php');
    ?>
  </body>
</html>
