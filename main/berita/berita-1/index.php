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
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="../../../build/assets/bulma/css/bulma.min.css">
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
                                    Warga Malang Temukan Pembangkit Listrik Tenaga Hampa
                                  </h1>
                                  <h4 class="subtitle has-text-dark is-size-6-mobile">
                                  Baca dengan Cermat, agar dapat menganalisis tahapn yang harus dilakukan
                                  </h4>
                                  <!-- <div class="columns is-mobile">
                                    <div class="column is-1"><p class="is-size-6-mobile has-text-dark">1/4</p></div>
                                    <div class="column"><bt/><progress class="progress is-medium is-info" value="25" max="100">25%</progress></div>
                                  </div> -->
                                  <br/>
                                  <figure class="image is-4by3">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                  </figure>
                                  <br/>
                                  <br/>
                                  <p class="has-text-justified is-size-6-mobile">Warga Desa Ngroto Kecamatan Pujon Kabupaten Malang, Slamet Hariyanto berhasil menemukan Pembangkit Listrik Tenaga Hampa (PLTH). Temuan pria berusia 51 tahun ini memanfaatkan karbon dari batok dan sabut kelapa yang berfungsi sebagai penyimpan energi sebagai alat penggerak listrik.  PLTH rancangan Slamet ini terbukti mampu menghasilkan energi listrik berdaya tinggi sampai 220 volt dengan kapasitas seribu sampai 6 ribu watt khusus pada fuse 1. Sedangkan untuk fuse 3 sanggup menghasilkan 380 fuse dengan kapasitas tegangan diatas 13 ribu volt. 
                                "Selama 4 tahun saya mengotak-atik sebelum berhasil seperti ini," kata Embing sapaan akrab Slamet ditemui wartawan di rumahnya, Rabu (25/7/2012).</p><br/>
                                <p class="has-text-justified is-size-6-mobile">Kehebatan pembangkit temuan Embing ini lebih ramah lingkungan karena tidak menggunakan bahan bakar minyak dan tak berisik serta menyisakan limbah. Embing mengaku, dirinya hanya butuh beberapa komponen untuk menyesuaikan pembangkit ciptaannya itu dibeli dari pasaran. Yakni kapasitor seharga Rp 850 ribu, sisanya memanfaatkan barang bekas pakai. 
                                Bahkan, temuanya ini sudah dipesan langsung oleh Menteri Negara BUMN Dahlan Iskan. "Iya katanya mau pesan," ucap pria lulusan sekolah dasar ini. </p><br/>
                                <p class="has-text-justified is-size-6-mobile">Lelaki juga membuka servis dinamo di rumahnya ini mengharapkan, hasil temuannya ini dapat bermanfaat bagi masyarakat yang membutuhkan. "Semoga ini ada manfaatnya," tutur Embing. Temuan Slamet ini mengegerkan Pemerintah Kabupaten Malang hingga berencana mematenkan karya warganya itu. "Kami siap fasilitasi untuk mematenkan karya Slamet itu," puji Bupati Malang Rendra Kresna terpisah.</p><br/>


                                  <div class="columns">
                                    <div class="column"></div>
                                    <div class="column"><br/><a href="../../kuis/"><button class="showAnswer button is-medium is-info is-center is-fullwidth"><strong>Mulai Kuis!</strong></button></a><br/></div>
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