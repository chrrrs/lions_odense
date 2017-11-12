<?php
  $headTitle = "Donér | Lions Odense";

  include('./assets/head_nav.php');

?>
    <section id="donation">
      <div id="donation-wrapper">
        <div id="donation-visual-container">
          <div id="donation-default">
            <h3>Tryk på værdien du vil donerer for at se hvad din donation går til.</h3>
            <p>Hos lions går din støtte ubeskåret til folk i nød, da 0% går til administration.</p>
          </div>
          <div id="donation-container-1">
            <div id="donation-picture-1"></div>
            <h3>Din donation giver vand!</h3>
            <p>Med din støtte vil vi kunne udleverer vand både på hjemmefronten såvel som internationalt i krise ramte områder.</p>
          </div>
          <div id="donation-container-2">
            <div id="donation-picture-2"></div>
            <h3>Vinteren kommer igen og igen</h3>
            <p>Derfor vil din donation gå til varmt tøj, som kan sørge for at alle klare den igennem vinteren.</p>
          </div>
          <div id="donation-container-3">
            <div id="donation-picture-3"></div>
            <h3>Giv mad hvor det behøves</h3>
            <p>Med din donation er kan vi brødføde 10 mennesker i en uge!</p>
          </div>
          <div id="donation-container-4">
            <div id="donation-picture-4"></div>
            <h3>Gør en verden til forskel</h3>
            <p>Nogle gange er mad og drikke bare ikke nok, med din støtte vil mennesker med sværre problemer få den hjælp de behøver i form af medicin.</p>
          </div>
          <div id="donation-container-5">
            <div id="donation-picture-5"></div>
            <h3>Husly skal være en menneskeret</h3>
            <p>Din støtte vil hjælpe krise ramte mennesker, som ikke har tag over hovedet.</p>
          </div>
        </div>
        <div id="value-select-container">
          <div id="value-select">
            <button type="button" id="checkBtn_one" value="50">50kr.</button>
            <button type="button" id="checkBtn_two" value="100">100kr.</button>
            <button type="button" id="checkBtn_three" value="150">150kr.</button>
            <button type="button" id="checkBtn_four" value="200">200kr.</button>
            <button type="button" id="checkBtn_five" value="300">300kr.</button>
          </div>
          <div id="donateBtn-container">
            <button type="button" id="donateBtn">Donér</button>
          </div>
        </div>
      </div>

      <div id="donateModal">
        <div id="donateModal-content">
          <span id="close-donate">&times;</span>
            <div id="donate-form">
              <div id="donate-info">
                <h3>Information</h3>
                <input type="text" name="firstname" placeholder="Fornavn">
                <input type="text" name="lastname" placeholder="Efternavn">
              </div>
              <div>
                <input type="text" name="email" placeholder="Email" class="address">
              </div>
              <div>
                <input type="text" name="address" placeholder="Adresse" class="address">
              </div>
            </div>
            <div id="donate-payment">
              <h3>Betaling</h3>
               <input type="text" name="cardNumber" placeholder="Kortnummer" class="card-info">
               <input type="text" name="cvc" placeholder="CVC" class="card-info">
               <div id="expDate">
                 <input type="text" name="month" placeholder="MM">
                 <input type="text" name="year" placeholder="YY">
               </div>
            </div>
            <div id="donate-placement-container">
              <button type="button" id="donateModalBtn">Donér</button>
            </div>
        </div>
      </div>
    </section>

    <?php
      include('./assets/footer.php');
    ?>
  </body>
</html>
