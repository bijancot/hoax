<!DOCTYPE html>
<?php
session_start();
$_SESSION['uname'];
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Melawan Hoaks dengan CINTA : Mengenal berita hoaks 1/4</title>
    <link rel="stylesheet" href="../assets/bulma/css/bulma.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  </head>
  <style>
      .hero-body,.navbar{
        background-color:#2FC0D3 !important;
      }
  </style>
  <body>
  <section class="hero is-fullheight">
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <!-- <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28"> -->
      <!-- <h1 class="title has-text-dark">Leres.</h1> -->
    </a>
  
    <!-- <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div> -->

  <!-- <div id="navMenu" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Home
      </a>

      <a class="navbar-item">
        Documentation
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div> -->
  <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
  </a>
</div>
  <div class="navbar-menu" id="navMenu">
    <!-- <div class="navbar-start">
      <a class="navbar-item">
        Home
      </a>

      <a class="navbar-item">
        Documentation
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div> -->

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-light showInfo">
            <strong>Tentang aplikasi ini</strong>
          </a>
          <!-- <a class="button is-light">
            Log in
          </a> -->
        </div>
      </div>
    </div>
  </div>
</nav>
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column"></div>
                <div class="column is-four-fifths"> 
                    <div class="card">
                        <div class="card-content ">
                          </br>
                          <div class="columns">
                              <div class="column"></div>
                              <div class="column is-four-fifths is-size-5-mobile is-size-6-desktop has-text-dark">
                                <h1 class="title has-text-dark">
                                  Mengenal Berita hoaks
                                  </h1>
                                  <h4 class="subtitle has-text-dark is-size-6-mobile">
                                  Pelajari tentang penyebab dan bagaimana memahami berita agar terhindar dari berita hoaks!
                                  </h4>
                                  <div class="columns is-mobile">
                                    <div class="column is-1"><p class="is-size-6-mobile has-text-dark">1/4</p></div>
                                    <div class="column"><bt/><progress style="color:#1C4686 !important" class="progress is-medium is-info" value="25" max="100">25%</progress></div>
                                  </div>
                                  <p class="has-text-justified is-size-6-mobile">Banyak hal terjadi di masa ini. Berbeda dengan dekade dan abad sebelumnya, di abad ke-21 ini semua serba cepat dan mudah didapatkan. Begitu juga dengan informasi dan berita. Laju berita sangat cepat, bahkan sebuah berita dapat didapatkan hanya dalam hitungan detik setelah sebuah kejadian terjadi. Hal tersebut bukan mustahil terjadi, apalagi dengan banyaknya alternatif pengaksesan berita mulai dari website berita, facebook dan beberapa sosial media lain termasuk WhatsApp.</p><br/>
                                  <div class="columns has-text-centered">
                                    <div class="column"></div>
                                    <div class="column has-text-centered"><br/><a href="belajar-1.php"><button style="background-color:#FF891D !important;color:black !important;" class="showAnswer button is-medium is-center is-rounded is-outlined is-fullwidth"><strong>Mulai !</strong></button></a><br/></div>
                                    <div class="column"></div>
                                  </div>
                              </div>
                              <div class="column"></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="column"></div>
            </div>
        </div>
    </div>
    <div class="modal modalr">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Tentang Kami</p>
        <button class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
        <!-- Content ... -->
      </section>
      <footer class="modal-card-foot">
        <button class="button is-success keluar">Ok</button>
      </footer>
    </div>
  </div>
  </section>
  <script type="text/javascript">
  $( document ).ready(function() {

$(".showInfo").click(function() {
    $(".modalr").addClass("is-active");  
  });

  $(".keluar").click(function() {
    $(".modalr").removeClass("is-active");
  });
  $(".delete").click(function() {
    $(".modalr").removeClass("is-active");
  });
  });
  document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

      // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}

});
  </script>
  </body>
</html>