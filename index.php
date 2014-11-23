<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>technews</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">




</head>

<body>
  <?php require "header.php"; ?>

  <div class="jumbotron">
    <div class="container">
      <!-- actualités -->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">ACTUALITÉS</h3>
        </div>
        <div class="panel-body">
          <div class="rows">
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/img.png">
              </a>
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/img.png">
              </a>
            </div>
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/img.png">
              </a>
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/img.png">
              </a>
            </div>
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/img.png">
              </a>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <span class="glyphicon glyphicon-plus blue" aria-hidden="true"></span>
          <a href="">plus d'articles</a>
        </div>
      </div>
      <!-- LOGICIEL -->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">LOGICIEL</h3>
        </div>
        <div class="panel-body">
          <div class="rows">
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-vlc'>
                <img src="img/vlc.jpeg" class="mwh">
              </a>

              <a class="thumbnail" data-toggle="modal" href='#modal-ccleaner'>
                <img src="img/ccleaner.jpg" class="mwh">
              </a>
            </div>
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/skype.jpg" class="mwh">
              </a>
              <a class="thumbnail" data-toggle="modal" href='#modal-utorrent'>
                <img src="img/utorrent.jpg" class="mwh">
              </a>
            </div>
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-adobereader'>
                <img src="img/adobereader.jpg" class="mwh">
              </a>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <span class="glyphicon glyphicon-plus blue" aria-hidden="true"></span>
          <a href="logi1.php">plus d'articles</a>
        </div>
      </div>
      <!-- JEUX -->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">JEUX-VIDEO</h3>
        </div>
        <div class="panel-body">
          <div class="rows">
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-shootiah'>
                <img src="img/Shootiah.jpg" class="mwh">
              </a>
              <a class="thumbnail" data-toggle="modal" href='#modal-Ghost-Recon'>
                <img src="img/Ghost-Recon.jpg" class="mwh">
              </a>
            </div>
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-smite'>
                <img src="img/smite.jpg" class="mwh">
              </a>
              <a class="thumbnail" data-toggle="modal" href='#modal-worldwarcraft'>
                <img src="img/worldwarcraft.jpg" class="mwh">
              </a>
            </div>
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-max-payne'>
                <img src="img/max-payne-2.jpg" class="mwh">
              </a>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <span class="glyphicon glyphicon-plus blue" aria-hidden="true"></span>
          <a href="">plus d'articles</a>
        </div>
      </div>
      <!-- TUTORIELS -->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">TUTORIELS</h3>
        </div>
        <div class="panel-body">
          <div class="rows">
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/img.png">
              </a>
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/img.png">
              </a>
            </div>
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/img.png">
              </a>
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/img.png">
              </a>
            </div>
            <div class="col-md-4">
              <a class="thumbnail" data-toggle="modal" href='#modal-skype'>
                <img src="img/img.png">
              </a>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <span class="glyphicon glyphicon-plus blue" aria-hidden="true"></span>
          <a href="">plus d'articles</a>
        </div>
      </div>

    </div>
  </div>
  </div>
  <!-- jQuery -->
  <script src="//code.jquery.com/jquery.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <div class="modal fade" id="modal-skype">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">SKYPE</h4>
        </div>
        <div class="modal-body">
          <p>Communiquez avec vos contacts Skype, Facebook et Windows Live Messenger, quelle que soit votre situation géographique et depuis n'importe quel accès à Internet grâce à Skype. Ce logiciel de messagerie instantanée et de visioconférence favorise une prise en main des plus simples pour échanger gratuitement et facilement dans un cadre sécurisé avec votre entourage ou dans le cadre professionnel. Rapatriez vos contacts non Skype sur votre interface Skype et discutez avec eux par messagerie instantanée ainsi que par conférence audio/vidéo. Permutez indifféremment et en un seul clic d’une conversation à un chat de groupe ou d’un appel à une vidéo. Une "aide intelligente" facilite les réglages et la résolution des problèmes sonores pendant les appels pour éviter les manipulations fastidieuses. Skype Wifi permet quant à lui de converser depuis n’importe quel accès Wifi supportant ce type de connexion via l’utilisation de crédits Skype à se procurer au préalable. Enfin, ne manquez plus une seule conversation grâce au transfert d’appel vers vos téléphones fixes et mobiles.</p>
        </div>
        <div class="modal-footer">

          <a type="button" href='http://www.facebook.com' class="btn btn-primary">lire la suite</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->

</body>

</html>
