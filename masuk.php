<!DOCTYPE html>
<html>
  <head>
  <?php
    $_COOKIE['msg'];
    // setcookie("msg", "", time() - 3600);
  ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Melawan Hoax Dengan CINTA : MASUK !</title>
    <link rel="stylesheet" href="assets/bulma/css/bulma.min.css">
  </head>
  <body>
  <section class="hero is-white is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column"></div>
                <div class="column"> 
                    <h2 class="has-text-weight-bold">
                    Jangan mudah kemakan hoaks!
                    </h2>
                    <div class="card" style="background-color:#ffdd57 !important">
                        <div class="card-content">
                            <form action="main/" method="post" id="createRoom">
                                <div class="field">
                                    <label class="label">Nama Unik</label>
                                    <div class="control">
                                      <input class="input" type="text" name="team" placeholder="Masukkan nama unik kamu!">
                                    </div>
                                    <?php
                                      if($_COOKIE['msg'] != null){
                                    ?>
                                    <p class="help is-danger"><?= $_COOKIE['msg'] ?></p>
                                    <?php
                                      setcookie("msg", "", time() - 3600);
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