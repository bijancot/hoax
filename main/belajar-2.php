<!DOCTYPE html>
<?php
session_start();
// $namaTeam = $_POST['team'];

// $_SESSION['uname'] = $namaTeam;
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Melawan Hoaks dengan CINTA : Mengenal berita hoaks 3/4</title>
    <link rel="stylesheet" href="../assets/bulma/css/bulma.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  </head>
  <body>
  <style>
      .hero-body,.navbar{
        background-color:#2FC0D3 !important;
      }
  </style>
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
                                    <div class="column is-1"><p class="is-size-6-mobile has-text-dark">3/4</p></div>
                                    <div class="column"><bt/><progress class="progress is-medium is-info" value="75" max="100">60%</progress></div>
                                  </div>
                                  <br/>
                                  <p class="has-text-justified is-size-6-mobile">Jadi, bagaimana cara kita terhindar dari berita hoaks?. Bu rahma punya solusinya, seperti di beberapa drama korea dan film hollywood kita dapat melawan semua kejahatan dengan C.I.N.T.A. Tunggu ini bukan lagu atau cinta yang itu, C.I.N.T.A adalah sebuah metode identifikasi informasi atau berita untuk menentukan apakah informasi / berita tersebut hoaks atau bukan, detilnya adalah sebagai berikut :</p><br/>
                                  <p class="has-text-dark is-size-4-mobile is-size-4-desktop">
                                    <strong>C : Cermati</strong>
                                  </p>
                                  <p class="has-text-dark is-size-4-mobile is-size-4-desktop">
                                    <strong>I : Investigasi</strong>
                                  </p>
                                  <p class="has-text-dark is-size-4-mobile is-size-4-desktop">
                                    <strong>N : Narasikan</strong>
                                  </p>
                                  <p class="has-text-dark is-size-4-mobile is-size-4-desktop">
                                    <strong>T : Telaah</strong>
                                  </p>
                                  <p class="has-text-dark is-size-4-mobile is-size-4-desktop">
                                    <strong>A : Apresiasi</strong>
                                  </p><br/>
                                  <div class="columns is-mobile">
                                    <div class="column is-hidden-mobile"></div>
                                    <div class="column"><br/><a href="belajar-1.php"><button style="background-color:#CE1212" class="showAnswer button is-medium is-danger is-center is-fullwidth is-size-6-mobile"><strong>Kembali</strong></button></a><br/></div>
                                    <div class="column"><br/><a href="belajar-3.php"><button style="background-color:#1BBF00" class="showAnswer button is-medium is-success is-center is-fullwidth is-size-6-mobile"><strong>Lanjutkan</strong></button></a><br/></div>
                                    <div class="column is-hidden-mobile"></div>
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