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
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-full"> 
                    <div class="card">
                        <figure class="image is-3by5">
                        <img src="../../assets/image/image_1.png" alt="Placeholder image">
                        </figure>
                        <div class="card-content is-size-5-mobile is-size-4-desktop">
                          Halo team <?= $user?> !, pertama mari nilai berita satu ini. Menurut kalian, kabar yang ada di tangkapan layar sebuah esan whatsapp ini fakta atau hoax? 
                          (pilih salah satu jawaban di bawah ya!)<br/>
                          </br>
                          <div class="columns">
                              <div class="column"></div>
                              <div class="column"><button class="showAnswer button is-medium is-success is-center is-fullwidth"><strong>Fakta</strong></button></div>
                              <div class="column"><button class="showAnswer button is-medium is-danger is-center is-fullwidth"><strong>Hoax</strong></button></div>
                              <div class="column"></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="column"></div>
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
                    <img src="../../assets/image/image_2.jpg" alt="Placeholder image">
                  </figure>
                  <br/><br/>
                  <h1 class="title">
                    <span class="has-text-dark">Kategori Informasi :</span> <em class="has-text-danger-dark">HOAX</em>
                    </h1>
                  <p class="has-text-dark">Dilansir dari Akun sosial media resmi BMKG Indonesia. Kendati mengandung pesan anjuran yang baik, Disebutkan bahwa pesat <em>whatsapp group</em> tersebut adalah pesan yang salah!. Pesan tersebut bisa saja menimbulkan keresahan di kalangan masyarakat dan menyebabkan kepanikan </p><br/>
                  <article class="message is-dark">
                    <div class="message-body">
                      kutipan resmi dari BMKG :<br/>
                      Badan Meteorologi, Klimatologi dan Geofisika (BMKG) memastikan beredarnya pesan singkat yang menyebut suhu panas mencapai 45 derajat celcius itu adalah informasi hoaks.
                  <strong>"Tidak benar atau hoaks,"</strong> ujar Kepala Bidang Meteorologi BMKG, R Mulyono Rahadi Prabowo
                    </div>
                  </article>
                    <p class="has-text-dark">Gimana jawaban kamu tadi ?, masih salah atau udah bener ? yuk kita coba lagi!. Klik tombol lanjutkan di bawah!</p>
                </section>
                <footer class="modal-card-foot">
                  <button class="button is-success">Lanjutkan >></button> 
                </footer>
              </div>
            </div>
        </div>
    </div>
  </section>
  <script type="text/javascript">
    $( document ).ready(function() {
      $(".showAnswer").click(function() {
      $(".modal").addClass("is-active");  
    });

    $(".delete").click(function() {
      $(".modal").removeClass("is-active");
    });
    });
  </script>
  </body>
</html>