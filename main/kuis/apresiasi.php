<?php

require_once('og.php');

    $dugaan =$_POST['dugaan'];
    $pro =$_POST['pro'];
    $kontra =$_POST['kontra'];
    $narasi =$_POST['narasi'];
    $sumberPro =$_POST['sumberPro'];
    $desSumberPro =$_POST['desSumberPro'];
    $narasumberPro =$_POST['narasumberPro'];
    $desNarasumberPro =$_POST['desNarasumberPro'];
    $dataPro =$_POST['dataPro'];
    $sumberKon =$_POST['sumberKon'];
    $desSumberKon =$_POST['desSumberKon'];
    $narasumberKon =$_POST['narasumberKon'];
    $desNarasumberKon =$_POST['desNarasumberKon'];
    $dataKon =$_POST['dataKon'];
    $berita = $_COOKIE['berita'];
    $team = $_SESSION['uname'];

    // $graph = OpenGraph::fetch('https://oto.detik.com/catatan-pengendara-mobil/d-5336846/gaib-mobil-tesla-bisa-melihat-hantu-di-kuburan?tag_from=wp_beritautama');    
    // var_dump($graph->keys());
    // //var_dump($graph->schema);
    // foreach ($graph as $key) {
    //     echo $key;
    // }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <title>Apresiasi</title>
    </head>
    <body>
        <section class="hero is-large is-dark is-bold is-fullheight">
            <div class="hero-body" style="padding:1.5rem !important;">
                <div class="container">
                    <div class="columns">
                        <div class="column is-three-fifths">
                            <h1 class="title is-size-2">
                                Judul Berita : <?= $berita ?>
                            </h1>
                            <h2 class="subtitle">
                                Apresiasi berita dari team <?= $team?>
                            </h2>
                            <article class="message is-success">
                                <div class="message-header">
                                    <p>Dugaan Sementara</p>
                                </div>
                                <div class="message-body">
                                    Team <?= $team?> menduga bahwa berita tentang Ironman Dari Bali adalah berita
                                    <strong>Hoaks</strong>
                                    <a href="#lanjut">Caritahu Lebih lanjut
                                    </a>
                                </div>
                            </article>
                            <figure class="image is-2by1">
                                <img src="https://bulma.io/images/placeholders/256x256.png">
                            </figure>
                        </div>
                        <div class="column">
                            <div class="columns ">
                                <div class="column">
                                    <div class="card mt-6">
                                        <div class="card-content">
                                            <p class="subtitle has-text-dark">
                                                Team <?= $team?> mengumpulkan berita yang Pro sebanyak :
                                            </p>
                                            <p class="title has-text-dark has-text-centered is-size-2 has-text-success">
                                                12 berita
                                            </p>
                                            <p class="has-text-dark">
                                                <a href="#data">Lihat Daftar berita ></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="card">
                                        <div class="card-content">
                                            <p class="subtitle has-text-dark">
                                                Team <?= $team?> mengumpulkan berita yang Kontra sebanyak :
                                            </p>
                                            <p class="title has-text-dark has-text-centered is-size-2 has-text-danger">
                                                10 berita
                                            </p>
                                            <p class="has-text-dark">
                                                <a href="#data">Lihat Daftar berita ></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="title">Pro Tip :</p>
                            <p class="subtitle">Jumlah berita tidak berpengaruh banyak terhadap fakta
                                berita, semakin terpercaya sumber berita semakin jauh dari hoaks</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero is-medium is-white is-bold" id="lanjut">
            <div class="hero-body py-6 my-5">
                <div class="container">
                    <h1 class="title is-size-2">
                        Narasi dari team <?= $team?> :
                    </h1>
                    <h2 class="subtitle">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, ad, consequatur
                        obcaecati fugiat, optio corporis temporibus voluptate vero corrupti dolor veniam
                        at! Vel repellendus sapiente sunt vero reiciendis eum in? Lorem ipsum dolor sit
                        amet consectetur, adipisicing elit. Dicta est eveniet, odio fugit sint animi eum
                        cumque. Nobis iure placeat excepturi. Praesentium asperiores sunt, eius
                        perspiciatis labore itaque veniam ipsam?
                    </h2>
                    <br/><br/>
                    <h1 class="title is-size-3">
                        Pertarungan pro dan kontra
                    </h1>

                    <div class="columns">
                        <div class="column">
                            <div class="card">
                                <p class="title pt-4 has-text-success has-text-centered">
                                    PRO
                                </p>
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img
                                            src="https://bulma.io/images/placeholders/1280x960.png"
                                            alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img
                                                    src="https://bulma.io/images/placeholders/96x96.png"
                                                    alt="Placeholder image">
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="title is-4">John Smith</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <p class="has-text-weight-bold">Pendapat team tentang berita :</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed optio obcaecati
                                            consequatur voluptate aut repudiandae necessitatibus exercitationem officia
                                            natus! Porro rem, minus numquam a libero accusamus facilis doloribus nostrum
                                            officiis.</p>
                                        <p class="has-text-weight-bold">Pendapat team tentang narasumber :</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, laboriosam
                                            ipsam. Qui inventore nostrum sit, odit delectus vitae dolores tempora, fugiat
                                            minus nisi accusantium optio? Temporibus nesciunt natus aut ipsam.</p>
                                        <p class="has-text-weight-bold">Pendapat team tentang data yang disajikan :</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, laboriosam
                                            ipsam. Qui inventore nostrum sit, odit delectus vitae dolores tempora, fugiat
                                            minus nisi accusantium optio? Temporibus nesciunt natus aut ipsam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-one-fifth">
                            <div class="container">
                                <h1 class="title has-text-dark has-text-centered py-6">VS</h1>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <p class="title pt-4 has-text-danger has-text-centered">
                                    KONTRA
                                </p>
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img
                                            src="https://bulma.io/images/placeholders/1280x960.png"
                                            alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img
                                                    src="https://bulma.io/images/placeholders/96x96.png"
                                                    alt="Placeholder image">
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="title is-4">John Smith</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <p class="has-text-weight-bold">Pendapat team tentang berita :</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed optio obcaecati
                                            consequatur voluptate aut repudiandae necessitatibus exercitationem officia
                                            natus! Porro rem, minus numquam a libero accusamus facilis doloribus nostrum
                                            officiis.</p>
                                        <p class="has-text-weight-bold">Pendapat team tentang narasumber :</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, laboriosam
                                            ipsam. Qui inventore nostrum sit, odit delectus vitae dolores tempora, fugiat
                                            minus nisi accusantium optio? Temporibus nesciunt natus aut ipsam.</p>
                                        <p class="has-text-weight-bold">Pendapat team tentang data yang disajikan :</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, laboriosam
                                            ipsam. Qui inventore nostrum sit, odit delectus vitae dolores tempora, fugiat
                                            minus nisi accusantium optio? Temporibus nesciunt natus aut ipsam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="hero is-medium is-primary is-bold" id="data">
        <div class="hero-body py-6">
            <div class="container">
                <h1 class="title has-text-centered is-size-2">Daftar Tautan berita team <?= $team?></h1>
                <div class="columns">
                    <div class="column">
                        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                            <thead>
                                <tr>
                                    <td class="is-dark has-text-centered has-text-weight-bold has-text-success">
                                        Berita Pro
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="https://bulma.io/documentation/elements/table/" class="has-text-info">https://bulma.io/documentation/elements/table/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://bulma.io/documentation/elements/table/" class="has-text-info">https://bulma.io/documentation/elements/table/</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="column">
                        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                            <thead>
                                <tr>
                                    <td class="is-dark has-text-centered has-text-weight-bold has-text-danger">
                                        Berita Kontra
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="https://bulma.io/documentation/elements/table/" class="has-text-info">https://bulma.io/documentation/elements/table/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://bulma.io/documentation/elements/table/" class="has-text-info">https://bulma.io/documentation/elements/table/</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="content has-text-centered">
          <p>
            <strong>Aplikasi anti hoax</strong> by Bu Rahma. The source code is licensed
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. Built with <a href="https://bulma.io">Bulma</a> by <a href="https://panjibaskoro.web.id">Panji Baskoro</a>.
          </p>
        </div>
      </footer>
</body>
</html>