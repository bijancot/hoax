<!DOCTYPE html>
<?php
session_start();
$namaTeam = $_POST['team'];

$_SESSION['uname'] = $_POST['team'];

// if($namaTeam != "anggur" || $namaTeam != "mangga"){
//   $msg = "Username tidak ada, tanya ke bu rahma ya!";
//   setcookie("msg", $msg, time() + 3600, "/");
//   header('Location: ../index.php');
// }
if($namaTeam == "anggur"|| $namaTeam == "mangga"){
  // do nothing
}else{
  $msg = "Username tidak ada, tanya ke guru kamu ya!";
  setcookie("msg", $msg, time() + 3600, "/");
  header('Location: ../masuk.php');
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="../assets/bulma/css/bulma.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  </head>
  <body>
  <section class="hero is-primary is-fullheight">
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <!-- <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28"> -->
      <h1 class="title has-text-dark">Leres.</h1>
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
          <a class="showInfo button is-light">
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
                        <div class="card-content">
                          <h1 class="title has-text-dark">
                            Halo <?= $_SESSION['uname']?> Selamat datang di Leres. !!
                            </h1>
                            <br/>
                            <h2 class="subtitle has-text-dark">
                            Sebelum mulai, yuk pemanasan dulu!. Di bagian kali ini teman-teman akan diajak untuk mengenali berita hoax dengan teknik paling dasar.
                            </h2>
                          </br>
                          <div class="columns">
                              <div class="column"></div>
                              <div class="column"><a href="pemanasan/pertama.php"><button class="button is-medium is-info is-center is-fullwidth"><strong>Mulai >></strong></button></a></div>
                              <div class="column"></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="column"></div>
            </div>

        </div>
    </div>
  </section>
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
  <script type="text/javascript">

$( document ).ready(function() {

  $(".showInfo").click(function() {
      $(".modalr").addClass("is-active");  
    });

    $(".keluar").click(function() {
      $(".modalr").removeClass("is-active");
    });
    });

  document.addEventListener('DOMContentLoaded', () => {
    
// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// // Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

//   // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

//       // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

//       // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}

});
  </script>
  </body>
</html>