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
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="../../../build/assets/bulma/css/bulma.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bijancot/deliv@16/hoax/step.css">
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
  <form action="data.php" method="POST">
  <div class="steps-content">
    <div class="step-content is-active">

      <div class="field">
          <label class="label">Identifikasi kata kunci</label>
          <div class="control">
          <textarea class="textarea" name="kata-kunci" placeholder="e.g. Hello world"></textarea>
          </div>
          <p class="help">This is a help text</p>
      </div>

      <div class="field">
          <label class="label">Dugaan Sementara</label>
          <div class="control">
          <input type="radio" name="dugaan" id="hoax" value="hoax">&nbsp;&nbsp;<label for="hoax">Hoax</label>&nbsp;&nbsp;&nbsp;<input type="radio" name="dugaan" id="fakta" value="fakta">&nbsp;&nbsp;<label for="fakta">Fakta</label>
          </div>
          <p class="help">This is a help text</p>
      </div>

    </div>
    <div class="step-content">

      <div class="field">
          <label class="label">PRO</label>
          <div class="control">
            <textarea class="textarea" name="pro" placeholder="Sampaikan berita pro"></textarea>
          </div>
          <p class="help">This is a help text</p>
      </div>

      <div class="field">
          <label class="label">KONTRA</label>
          <div class="control">
            <textarea class="textarea" name="kontra" placeholder="Sampaikan berita kontra"></textarea>
          </div>
          <p class="help">This is a help text</p>
      </div>


    </div>
    <div class="step-content">

      <div class="field">
          <label class="label">Narasikan </label>
          <div class="control">
            <textarea class="textarea" name="Narasi" placeholder="Narasikann!"></textarea>
          </div>
          <p class="help">This is a help text</p>
      </div>

    </div>
    <div class="step-content">
      <div class="columns">
        <div class="column">
        <h1 class="title is-4 has-text-success">PRO</h1>
        
        <div class="field">
          <label class="label">Sumber Berita </label>
          <div class="control">
          <input class="input" name="sumber-pro" id="sumber-pro" type="text" placeholder="sumber berita pro" autofocus data-validate="require">
          </div>
          <p class="help">This is a help text</p>
        </div>

        <div class="field">
          <label class="label">Narasumber </label>
          <div class="control">
          <input class="input" name="narasumber-pro" id="narasumber-pro" type="text" placeholder="Narasumber" autofocus data-validate="require">
          </div>
          <p class="help">This is a help text</p>
        </div>

        <div class="field">
          <label class="label">Data yang disajikan </label>
          <div class="control">
          <textarea class="textarea" name="data-pro" placeholder="Tulis di sini"></textarea>
          </div>
          <p class="help">This is a help text</p>
        </div>

        </div>
        <div class="column is-one-fifth"><h1 class="title is-4 has-text-dark">VS</h1></div>
        <div class="column">
        <h1 class="title is-4 has-text-danger">KONTRA</h1>

        <div class="field">
          <label class="label">Sumber Berita </label>
          <div class="control">
          <input class="input" name="sumber-kon" id="sumber-kon" type="text" placeholder="sumber berita Kontra" autofocus data-validate="require">
          </div>
          <p class="help">This is a help text</p>
        </div>

        <div class="field">
          <label class="label">Narasumber </label>
          <div class="control">
          <input class="input" name="narasumber-kon" id="narasumber-kon" type="text" placeholder="Narasumber" autofocus data-validate="require">
          </div>
          <p class="help">This is a help text</p>
        </div>

        <div class="field">
          <label class="label">Data yang disajikan </label>
          <div class="control">
          <textarea class="textarea" name="data-kon" placeholder="Tulis di sini"></textarea>
          </div>
          <p class="help">This is a help text</p>
        </div>

        </div>
     </div>
    </div>
</div>
    <div class="step-content has-text-centered">
    
        <div class="field">
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
        </div>

        <div class="columns">
          <div class="column"></div>
          <div class="column"><button class="button is-success">Selesai mengerjakan</button></div>
          <div class="column"></div>
        </div>
    </div>

  </div>
  </form>
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