// Event Modal
var signupModal = document.querySelector('#signupModal');

var eventBtn = document.querySelectorAll(".event-button");

var closeSignup = document.querySelector("#close-signup");

if(eventBtn){
  for(var i = 0; i < eventBtn.length; i++ ) {
    eventBtn[i].addEventListener( 'click', function() {
    signupModal.style.display = "block";
    });
  }
}

if(closeSignup){
  closeSignup.onclick = function() {
    signupModal.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == signupModal) {
    signupModal.style.display = "none";
  }
}

// Signup for event
var eventSignup = document.querySelector('#signupEventBtn');

var eventModal = document.querySelector('#signupModal-content');

if(eventSignup) {
  eventSignup.addEventListener('click', function() {
    eventModal.innerHTML = "<span id='close-signup'>&times;</span><h2> Succes! du har nu tilmeldt dig arrangementet </h2> <p>Vi hos Lions Odense er enormt taknemmelige for din støtte.</p> <i>Vi vil snarest informerer dig om praktiske information vedrørende arrangementet.</i>"
  });
}

// Newsletter Modal
var newsletterModal = document.querySelector('#newsletterModal');

var signupBtn = document.querySelector("#signupBtn");

var closeNewsletter = document.querySelector("#close-newsletter");

if(signupBtn){
  signupBtn.addEventListener( 'click', function() {
    newsletterModal.style.display = "block";
  });
}

if(closeNewsletter){
  closeNewsletter.onclick = function() {
    newsletterModal.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == newsletterModal) {
    newsletterModal.style.display = "none";
  }
}

// Donate options
var checkBtn_one = document.querySelector('#checkBtn_one');
var checkBtn_two = document.querySelector('#checkBtn_two');
var checkBtn_three = document.querySelector('#checkBtn_three');
var checkBtn_four = document.querySelector('#checkBtn_four');
var checkBtn_five = document.querySelector('#checkBtn_five');

var donate_default = document.querySelector('#donation-default');
var donate_one = document.querySelector('#donation-container-1');
var donate_two = document.querySelector('#donation-container-2');
var donate_three = document.querySelector('#donation-container-3');
var donate_four = document.querySelector('#donation-container-4');
var donate_five = document.querySelector('#donation-container-5');

if(checkBtn_one) {
  checkBtn_one.addEventListener('click', function() {
    donate_default.style.display = 'none';
    donate_one.style.display = 'flex';
    donate_two.style.display = 'none';
    donate_three.style.display = 'none';
    donate_four.style.display = 'none';
    donate_five.style.display = 'none';
  });
  checkBtn_two.addEventListener('click', function() {
    donate_default.style.display = 'none';
    donate_one.style.display = 'none';
    donate_two.style.display = 'flex';
    donate_three.style.display = 'none';
    donate_four.style.display = 'none';
    donate_five.style.display = 'none';
  });
  checkBtn_three.addEventListener('click', function() {
    donate_default.style.display = 'none';
    donate_one.style.display = 'none';
    donate_two.style.display = 'none';
    donate_three.style.display = 'flex';
    donate_four.style.display = 'none';
    donate_five.style.display = 'none';
  });
  checkBtn_four.addEventListener('click', function() {
    donate_default.style.display = 'none';
    donate_one.style.display = 'none';
    donate_two.style.display = 'none';
    donate_three.style.display = 'none';
    donate_four.style.display = 'flex';
    donate_five.style.display = 'none';
  });
  checkBtn_five.addEventListener('click', function() {
    donate_default.style.display = 'none';
    donate_one.style.display = 'none';
    donate_two.style.display = 'none';
    donate_three.style.display = 'none';
    donate_four.style.display = 'none';
    donate_five.style.display = 'flex';
  });
}

// Donate Modal
var donateModal = document.querySelector('#donateModal');

var donateBtn = document.querySelector("#donateBtn");

var closeDonate = document.querySelector("#close-donate");

if(donateBtn){
  donateBtn.addEventListener( 'click', function() {
    donateModal.style.display = "block";
  });
}

if(closeDonate){
  closeDonate.onclick = function() {
    donateModal.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == donateModal) {
    donateModal.style.display = "none";
  }
}

var donateModalBtn = document.querySelector('#donateModalBtn');
var donateContent = document.querySelector('#donateModal-content');
var successMessage = document.querySelector('#success-container');

if(donateModalBtn) {
  donateModalBtn.addEventListener('click', function() {
    donateContent.innerHTML = '<div style="display: flex; flex-direction: column; align-items: center;"><img src="/lions_1/assets/css/images/present.svg" style="width: 5rem; height: 5rem;"><h2>Succes! Din støtte er med til at gøre en forskel</h2><i>Din gave vil blive givet videre hurtigst muligt.</i></div>';
  });
}

// Google Maps Configurations
function initMap() {
        var odense = {lat: 55.4038, lng: 10.4024};
        var map = new google.maps.Map(document.getElementById('contact-map'), {
          zoom: 8,
          center: odense
        });
        var marker = new google.maps.Marker({
          position: odense,
          map: map
        });
      }
