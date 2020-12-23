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
    <link rel="stylesheet" href="../../../assets/bulma/css/bulma.min.css">
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
                                    Tahap 1 : Cermati
                                  </h1>
                                  <h4 class="subtitle has-text-dark is-size-6-mobile">
                                  Cermati berita yang tadi sudah kamu baca, kemudian isi isian di bawah
                                  </h4>
                                  <!-- <div class="columns is-mobile">
                                    <div class="column is-1"><p class="is-size-6-mobile has-text-dark">1/4</p></div>
                                    <div class="column"><bt/><progress class="progress is-medium is-info" value="25" max="100">25%</progress></div>
                                  </div> -->
                                  <div class="steps" id="stepsDemo">
  <div class="step-item is-active is-success">
    <div class="step-marker">1</div>
    <div class="step-details">
      <p class="step-title">Account</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">2</div>
    <div class="step-details">
      <p class="step-title">Profile</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">3</div>
    <div class="step-details">
      <p class="step-title">Social</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">4</div>
    <div class="step-details">
      <p class="step-title">Finish</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">5</div>
    <div class="step-details">
      <p class="step-title">Finish</p>
    </div>
  </div>
  <div class="steps-content">
    <div class="step-content has-text-centered is-active">
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Username</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" name="username" id="username" type="text" placeholder="Username" autofocus data-validate="require">
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Password</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control has-icon has-icon-right">
              <input class="input" type="password" name="password" id="password" placeholder="Password" data-validate="require">
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Confirm password</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control has-icon has-icon-right">
              <input class="input" type="password" name="password_confirm" id="password_confirm" placeholder="Confirm password" data-validate="require">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="step-content has-text-centered">
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Firstname</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" name="firstname" id="firstname" type="text" placeholder="Firstname" autofocus data-validate="require">
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Last name</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control has-icon has-icon-right">
              <input class="input" type="text" name="lastname" id="lastname" placeholder="Last name" data-validate="require">
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Email</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control has-icon has-icon-right">
              <input class="input" type="email" name="email" id="email" placeholder="Email" data-validate="require">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="step-content has-text-centered">
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Facebook account</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" name="facebook" id="facebook" type="text" placeholder="Facebook account url" autofocus data-validate="require">
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Twitter account</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" name="twitter" id="twitter" type="text" placeholder="Twitter account url" autofocus data-validate="require">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="step-content has-text-centered">
      <h1 class="title is-4">Your account is now created!</h1>
    </div>
    <div class="step-content has-text-centered">
      <h1 class="title is-4">Your account is now created!</h1>
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

                                  <br/>

                                  <div class="columns">
                                    <div class="column"></div>
                                    <div class="column"><br/><a href="belajar-1.php"><button class="showAnswer button is-medium is-info is-center is-fullwidth"><strong>Langkah Selanjutnya : Investigasi</strong></button></a><br/></div>
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
  <script async defer type="text/javascript">
  (function() {
    window.fnames = new Array();
    window.ftypes = new Array();
    fnames[0]='EMAIL';
    ftypes[0]='email';
  }());
  // var $mcj = window.jQuery.noConflict(true);
</script>
  </body>
</html>