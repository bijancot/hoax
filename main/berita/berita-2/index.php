<!DOCTYPE html>
<?php
session_start();
$namaTeam = $_POST['team'];

$_SESSION['uname'] = $namaTeam;
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="../../../assets/bulma/css/bulma.min.css">
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
                                  <p class="has-text-justified is-size-6-mobile">Jika Iron Man atau Tony Stark benar-benar ada dan tinggal di Indonesia, mungkin gelar tersebut lebih tepat disandang oleh I Wayan Sumardana alias Tawan. Pria berusia 31 tahun asal Banjar Tauman, Desa Nyuhtebel, Bali ini dijuluki manusia robot oleh warga sekitar. Bukan main-main, Tawan menciptakan tangan robot yang dapat digerakkan dengan otak. Tawan yang bekerja sebagai tukang les ini suatu kali jatuh sakit dan menderita stroke ringan. Akibatnya, tangan kirinya lumpuh total. Padahal, Tawan merupakan tulang punggung keluarga bagi istri dan tiga anak lelakinya. Memutar akal, kondisi lumpuh sebelah tidak ia jadikan beban. Meski sempat stres, Tawan kemudian mencari informasi di situs internet untuk merancang alat atau sejenis robot yang dapat membantunya menggerakkan tangan kirinya yang lumpuh.</p><br/>
                                <p class="has-text-justified is-size-6-mobile">Berbekal pengetahuan tentang elektronik yang ia dapat waktu sekolah di STM, Tawan menciptakan berbagai rancangan robot. Beberapa kali rancangannya gagal, namun yang terakhir ia berhasil. Ia menciptakan robot sejenis EEG.
"Alat ini belum sempurna, tapi sudah lumayan membantu. Tanpa alat ini, saya sama sekali tak bisa menggunakan tangan kiri," ujar Tawan seperti dikutip dari Balipost, Senin (18/01/2016).</p><br/>
                                <p class="has-text-justified is-size-6-mobile">Hebatnya, robot yang diciptakan oleh Tawan ini bahan bakunya dari barang-barang bekas. Komponen shock sepeda motor maupun perangkat elektronik komputer rongsokan, berhasil ia padukan menjadi tangan robot. Menurut Tawan, robot ini digerakkan dengan sinyal dari otaknya. Karenanya, saat menggunakan tangan kiri dengan bantuan robot yang ia buat, ia mesti berkonsentrasi penuh. Tawan sempat mendemonstrasikan kemampun robot di tangannya saat mengangkat pelek mobil seberat 10 kg. Saat diangkat dengan tangannya yang normal, terasa berat. Namun saat diangkat dengan tangan kiri, terlihat ia mengangkatnya dengan enteng.</p><br/>
                                <p class="has-text-justified is-size-6-mobile">"Tapi karena pakai sinyal otak, energi saya terkuras. Saya harus konsentrasi dan fokus pada benda yang mau diambil atau mengerjakan apa. Kalau tak fokus, susah," imbuh Tawan.
Kini, Tawan yang bekerja di sebuah bengkel di desanya dapat bekerja kembali. Selain mengelas berbagai besi untuk perabot rumah tangga, ia juga melayani panggilan untuk mengelas benda-benda milik tetangganya.</p><br/>


                                  <div class="columns">
                                    <div class="column"></div>
                                    <div class="column"><br/><a href="belajar-1.php"><button class="showAnswer button is-medium is-info is-center is-fullwidth"><strong>Mulai Kuis!</strong></button></a><br/></div>
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