<!DOCTYPE html>
<?php
session_start();
// echo $_SESSION['uname'];

// if($namaTeam != "anggur" || $namaTeam != "mangga"){
//   $msg = "Username tidak ada, tanya ke bu rahma ya!";
//   setcookie("msg", $msg, time() + 3600, "/");
//   header('Location: ../index.php');
// }
// if($namaTeam == "anggur"|| $namaTeam == "mangga"){
//   // do nothing
// }else{
//   $msg = "Username tidak ada, tanya ke bu rahma ya!";
//   setcookie("msg", $msg, time() + 3600, "/");
//   header('Location: ../index.php');
// }

if($_SESSION['uname'] == "anggur"){
  setcookie("berita", "Warga Malang Temukan Pembangkit Listrik Tenaga Hampa", time() + 3600, '/');
  setcookie("img_berita", "https://akcdn.detik.net.id/customthumb/2012/07/25/475/generator-buatan--D.jpg?w=700&q=90", time() + 3600, '/');
}if($_SESSION['uname'] == "mangga"){
  setcookie("berita", "IronMan Dari Bali", time() + 3600, '/');
  setcookie("img_berita", "https://statik.tempo.co/data/2016/01/17/id_473783/473783_620.jpg", time() + 3600, '/');
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Melawan Hoaks dengan CINTA : Waktunya Kuis!</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bijancot/deliv@16/hoax/step.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  </head>
  <style>
      .hero-body,.navbar{
        background-color:#2FC0D3 !important;
      }
  </style>
  <body>
  <section class="hero is-primary is-fullheight">
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
                        <h1 class="title has-text-dark has-text-centered">
                            Saatnya Ujian untuk <?= $_SESSION['uname']?> Semangat, dan sabar ini ujian !!
                            </h1>
                        <div class="steps" id="stepsDemo">
  <div class="step-item is-active is-success">
    <div class="step-marker">1</div>
    <div class="step-details">
      <p class="step-title">Cermati</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">2</div>
    <div class="step-details">
      <p class="step-title">Investigasi</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">3</div>
    <div class="step-details">
      <p class="step-title">Narasi</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">4</div>
    <div class="step-details">
      <p class="step-title">Telaah</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">5</div>
    <div class="step-details">
      <p class="step-title">Apresiasi</p>
    </div>
  </div>
  
  <div class="steps-content">

    <div class="step-content is-active">
    <form action="apresiasi.php" method="POST">
      <div class="field">
          <label class="label">Identifikasi kata kunci</label>
          <div class="control">
          <textarea class="textarea" name="kata-kunci" placeholder="Masukkan kata kunci" required></textarea>
          </div>
      </div>

      <div class="field">
          <label class="label">Dugaan Sementara</label>
          <div class="control">
          <input type="radio" name="dugaan" id="hoax" value="hoaks" required>&nbsp;&nbsp;<label for="hoax">Hoaks</label>&nbsp;&nbsp;&nbsp;<input type="radio" name="dugaan" id="fakta" value="fakta" required>&nbsp;&nbsp;<label for="fakta">Fakta</label>
          </div>
          <p class="help">Pilih salah satu</p>
      </div>

    </div>
    <div class="step-content">

      <div class="field">
          <label class="label">PRO</label>
          <p class="help">Contoh : https://tekno.tempo.co/read/738619/tangan-iron-man-dari-bali-tak-bisa-dipakai-orang-lain (sertakan https:// lengkap dari berita)</p>
          <div class="control">
            <textarea class="textarea" name="pro" placeholder="Masukkan berita yang pro jika temukan beberapa pisahkan dengan koma :D" required></textarea>
          </div>
      </div>

      <div class="field">
          <label class="label">KONTRA</label>
          <p class="help">Contoh : https://tekno.tempo.co/read/738619/tangan-iron-man-dari-bali-tak-bisa-dipakai-orang-lain (sertakan https:// lengkap dari berita)</p>
          <div class="control">
            <textarea class="textarea" name="kontra" placeholder="Masukkan berita yang kontra jika temukan beberapa pisahkan dengan koma (,) :D" required></textarea>
          </div>
      </div>


    </div>
    <div class="step-content">

      <div class="field">
          <label class="label">Narasikan </label>
          <div class="control">
            <textarea class="textarea" name="Narasi" placeholder="Narasikann temuan kamu (semacam tanggapan gitu)" required></textarea>
          </div>
      </div>

    </div>
    <div class="step-content">
      <div class="columns">
        <div class="column">
        <h1 class="title is-4 has-text-success">PRO</h1>
        
        <div class="field">
          <label class="label">Sumber Berita </label>
          <div class="control">
          <input class="input" name="sumberPro" id="sumber-pro" type="text" placeholder="sumber berita pro (masukkan 1 yang paling ultimate)" autofocus data-validate="require" required>
          </div>
          <p class="help">Kasih pendapat kamu tentang sumber berita pro</p>
          <textarea class="textarea" name="desSumberPro" placeholder="Jelaskan pendapat anda tentang sumber berita pro yang sudah anda temukan" required></textarea>
        </div>

        <div class="field">
          <label class="label">Narasumber </label>
          <div class="control">
          <input class="input" name="narasumberPro" id="narasumber-pro" type="text" placeholder="Narasumber" autofocus data-validate="require" required>
          </div>
          <p class="help"><p class="help">Kasih pendapat kamu tentang narasumber berita pro</p></p>
          <textarea class="textarea" name="desNarasumberPro" placeholder="Jelaskan pendapat anda tentang narasumber berita kontra yang sudah anda temukan" required></textarea>
        </div>

        <div class="field">
          <label class="label">Data yang disajikan </label>
          <div class="control">
          <textarea class="textarea" name="dataPro" placeholder="Tuliskan hasil analisis data yang ditampilkan di sumber berita pro" required></textarea>
          </div>
        </div>

        </div>
        <div class="column is-one-fifth"><h1 class="title is-4 has-text-dark">VS</h1></div>
        <div class="column">
        <h1 class="title is-4 has-text-danger">KONTRA</h1>

        <div class="field">
          <label class="label">Sumber Berita </label>
          <div class="control">
          <input class="input" name="sumberKon" id="sumber-kon" type="text" placeholder="sumber berita Kontra (masukkan 1 yang paling ultimate)" autofocus data-validate="require" required>
          </div>
          <p class="help">Kasih pendapat kamu tentang sumber berita kontra</p>
          <textarea class="textarea" name="desSumberKon" placeholder="Jelaskan pendapat anda tentang sumber berita kontra yang sudah anda temukan" required></textarea>
        </div>

        <div class="field">
          <label class="label">Narasumber </label>
          <div class="control">
          <input class="input" name="narasumberKon" id="narasumber-kon" type="text" placeholder="Narasumber" autofocus data-validate="require" required>
          </div>
          <p class="help">Kasih pendapat kamu tentang narasumber berita kontra</p>
          <textarea class="textarea" name="desNarasumberKon" placeholder="Jelaskan pendapat anda tentang narasumber berita kontra yang sudah anda temukan"></textarea>
        </div>

        <div class="field">
          <label class="label">Data yang disajikan </label>
          <div class="control">
          <textarea class="textarea" name="dataKon" placeholder="Tuliskan hasil analisis data yang ditampilkan pada sumber berita kontra" required></textarea>
          </div>
        </div>

        </div>
     </div>
    </div>
    <div class="step-content has-text-centered">
    
        <!-- <div class="field">
          <label class="label">Presentasi </label>
          <div class="control">
          <textarea class="textarea" name="presentasi" placeholder="Tulis di sini"></textarea>
          </div>
          <p class="help">This is a help text</p>
        </div>

        <div class="field">
          <label class="label">Pembaruan Informasi </label>
          <div class="control">
          <textarea class="textarea" name="informasi" placeholder="Tulis temuan kamu di sini"></textarea>
          </div>
          <p class="help">This is a help text</p>
        </div>

        <div class="field">
          <label class="label">Tanggapan </label>
          <div class="control">
          <textarea class="textarea" name="tanggapan" placeholder="Tulis tanggapan di sini"></textarea>
          </div>
          <p class="help">This is a help text</p>
        </div> -->
        <div class="columns">
          <div class="column"></div>
          <div class="column"><button class="button is-success has-text-weight-bold">Tampilkan Apresiasi!</button></div>
          <div class="column"></div>
        </div>
  </form>
    </div>

  </div>
  <div class="steps-actions">
    <div class="steps-action">
      <a href="#" data-nav="previous" class="button is-light">Previous</a>
    </div>
    <div class="steps-action">
      <a href="#" data-nav="next" class="button is-light">Next</a>
    </div>
  </div>
</div>
                          </br>
                          <!-- <div class="columns">
                              <div class="column"></div>
                              <div class="column"><a href="pemanasan/pertama.php"><button class="button is-medium is-info is-center is-fullwidth"><strong>Mulai >></strong></button></a></div>
                              <div class="column"></div>
                          </div> -->
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
  <script src="https://cdn.jsdelivr.net/npm/bulma-steps@2.2.1/dist/js/bulma-steps.min.js"></script>

<script> bulmaSteps.attach(); </script>
  <script src="https://wikiki.github.io/js/main.js?v=201911011043"></script>
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