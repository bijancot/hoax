<!DOCTYPE html>
<?php

$namaTeam = $_POST['team'];

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="../assets/bulma/css/bulma.min.css">
  </head>
  <body>
  <section class="hero is-primary is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column"></div>
                <div class="column is-four-fifths"> 
                    <div class="card">
                        <div class="card-content">
                          <h1 class="title has-text-dark">
                            Halo <?= $namaTeam?> Selamat datang di Leres. !!
                            </h1>
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
  </body>
</html>