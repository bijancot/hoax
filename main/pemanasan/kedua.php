<!DOCTYPE html>
<html>
  <?php
  session_start();

  $user = $_SESSION['uname'];
  ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="../../assets/bulma/css/bulma.min.css">
    <!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" /> -->
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
          <a class="button is-light">
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
                <div class="column is-two-thirds"> 
                    <div class="card">
                      <header class="card-header ">
                        <p class="card-header-title has-text-left">
                          Tangkapan layar salah satu unggahan netizen di facebook
                        <!-- </p> -->
                        <!-- <a href="#" class="card-header-icon" aria-label="more options">
                          <span class="icon">
                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                          </span>
                        </a> -->
                      </header>
                        <figure class="image is-3by5">
                        <img src="../../assets/image/image_4.png" alt="Placeholder image">
                        </figure>
                        <div class="card-content is-size-5-mobile is-size-4-desktop ">
                          <!-- <div class="is-hidden-mobile">Tangkapan layar Pesan salah satu <em>WhatsApp Group</em></div> -->
                          <div class="is-hidden-desktop penjelasan">
                            <h2 class="title has-text-dark">Latihan 2</h2><br/>
                            Okay team <?= $user ?>, mari kita analisa berita kedua ini. Menurut kamu berita ini hoax atau fakta? 
                            
                              <br/><br/><br/><p><strong class="has-text-centered">Pilih jawaban di bawah ini :</strong></p>
                            <div class="columns">
                              <div class="column"></div>
                              <div class="column"><button class="showAnswer button is-medium is-success is-center is-fullwidth"><strong>Fakta</strong></button></div>
                              <div class="column"><button class="showAnswer button is-medium is-danger is-center is-fullwidth"><strong>Hoax</strong></button></div>
                              <div class="column"></div>
                          </div>
                            </div>
                            <br/>
                        </div>
                    </div>
                    <br/>
                    <!-- <div class="card">
                      <div class="card-content">
                        <p class="has-text-centered"><strong>Pilih jawaban sekarang :</strong></p>
                      <div class="columns">
                              <div class="column"></div>
                              <div class="column"><button class="showAnswer button is-medium is-success is-center is-fullwidth"><strong>Fakta</strong></button></div>
                              <div class="column"><button class="showAnswer button is-medium is-danger is-center is-fullwidth"><strong>Hoax</strong></button></div>
                              <div class="column"></div>
                          </div>
                      </div>
                    </div> -->
                </div>
                <div class="column">
                  <div class="card is-hidden-mobile">
                    
                    <div class="card-content is-size-5-mobile is-size-5-desktop">
                      <h2 class="title has-text-dark">Latihan 2</h2>
                      Okay team <?= $user ?>, mari kita analisa berita kedua ini. Menurut kamu berita ini hoax atau fakta?
                      <br/><br/>
                      <p class="has-text-centered"><strong>Pilih jawaban di bawah ini :</strong></p><br/>
                      <div class="columns">
                              
                              <div class="column"><button class="showAnswer button is-medium is-success is-center is-fullwidth"><strong>Fakta</strong></button></div>
                              <div class="column"><button class="showAnswer button is-medium is-danger is-center is-fullwidth"><strong>Hoax</strong></button></div>
                              
                          </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal">
              <div class="modal-background"></div>
              <div class="modal-card">
                <header class="modal-card-head">
                  <p class="modal-card-title">Jawaban</p>
                  <button class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                  <figure class="image is-4by5">
                    <img src="../../assets/image/image_3.png" alt="Placeholder image">
                  </figure>
                  <br/><br/>
                  <h1 class="title">
                    <span class="has-text-dark">Kategori Informasi :</span> <em class="has-text-danger-dark">HOAX</em>
                    </h1>
                  <p class="has-text-dark">Sekali lagi, informasi yang telah disebarkan oleh netizen bertujuan baik, namun <strong class="has-text-danger-dark">tidak</strong> diiringi dengan <strong class="has-text-danger-dark">pencarian fakta yang tepat</strong> sehingga terjadi disinformasi. Yuk cek dulu sebelum berbagi berita!</p><br/>
                  <article class="message">
                    <div class="message-body">
                      kutipan resmi dari Kominfo :<br/>
                      Kementerian Kesehatan menyatakan tidak pernah mengeluarkan informasi tentang pencegahan infeksi virus Corona 2019-nCoV tersebut kepada masyarakat. <strong>“Tidak pernah ada,”  </strong> kata Direktur Jenderal Pencegahan dan Pengendalian Penyakit Kemenkes, Anung Sugihantono.
                    </div>
                  </article>
                    <p class="has-text-dark">Sampai sini udah paham kan? Yuk baca sedikit informasi lagi biar terhindar dari hoax!</p>
                </section>
                <footer class="modal-card-foot">
                  <a href="../belajar.php"><button class="button is-success">Lanjutkan >></button> </a>
                </footer>
              </div>
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
        <button class="button keluar is-success">Ok</button>
      </footer>
    </div>
  </div>
  </section>
  <script type="text/javascript">
    $( document ).ready(function() {
      $(".showAnswer").click(function() {
      $(".modal").addClass("is-active");  
    });

    $(".showInfo").click(function() {
      $(".modalr").addClass("is-active");  
    });

    $(".delete").click(function() {
      $(".modal").removeClass("is-active");
    });

    $(".keluar").click(function() {
      $(".modalr").removeClass("is-active");
    });
    });
  </script>
  </body>
</html>