<!DOCTYPE html>
<html>
  <head>
  <?php
    $msg = $_COOKIE['msg'];
    // setcookie("msg", "", time() - 3600);
  ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="assets/bulma/css/bulma.min.css">
  </head>
  <body>
  <section class="hero is-warning is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column"></div>
                <div class="column"> 
                    <h1 class="title">
                    Leres.
                    </h1>
                    <h2 class="subtitle">
                    Jangan mudah kemakan hoax!
                    </h2>

                    <div class="card">
                        <div class="card-content">
                            <form action="main/" method="post" id="createRoom">
                                <div class="field">
                                    <label class="label">Nama Unik</label>
                                    <div class="control">
                                      <input class="input" type="text" name="team" placeholder="Masukkan nama unik kamu!">
                                    </div>
                                    <?php
                                      if($msg != null){
                                    ?>
                                    <p class="help is-danger"><?= $msg ?></p>
                                    <?php
                                      }else{
                                    ?>
                                    <p class="help">Minta ke bu guru ya! ;)</p>
                                    <?php
                                      }
                                    ?>
                                    
                                  </div>
                                  <div class="field">
                                    <div class="control">
                                      <button class="button is-medium is-dark is-fullwidth"><strong>Masuk Sekarang!</strong></button>
                                    </div>
                                  </div>
                            </form>
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