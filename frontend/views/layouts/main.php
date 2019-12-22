<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\ThemeAsset;

ThemeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container-fluid top-app" >
  <h1>Welcome to AKN Pacitan</h1>
</div>
<nav class="head navbar navbar-default "  data-spy="affix" data-offset-top="210">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AKN Pacitan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Absen</a></li>
            <li><a href="#">Pegawai</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="site/contact">Contact</a></li>
            <li><a href="#">About</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="head">


</div>
<div class="wrap">


    <div class="container">
     <div class="row">
       <div class="col-lg-6">
         <div class="info-box">
          <h4>
            Sekilas Tentang AKN Pacitan
          </h4>
          <hr>
          <p>
          Akademi Komunitas(AK) Pacitan adalah lembaga pendidikan Negeri kejurusan pasca MA,SMA dan SMK dengan progam D1 dan D2. Untuk kurikulumnya dibangun dengan Politeknik, DU/DI , dan pelaku pasar yang berorientasi pengembangan profesi industri dan berkelanjutan. Secara kelembagaan AK Pacitan berada dalam binaan direktorat jendral pendidikan tinggi dengan status negeri.
          </p>
         </div>
       </div>
       <div class="col-lg-6">
          <div class="info-box">
           <h4>
             Alamat :
           </h4>
           <hr>
           <p>
             Jl. Walanda Maramis 04A Kec./Kab. Pacitan Jawa Timur 63514 <br><br>
             +62-357-881657 <br>
             +62-357-881652 <br>
             <a href="http://www.info@aknpacitan.ac.id">info@aknpacitan.ac.id</a>
          </p>
          </div>
       </div>

     </div>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; AKN Pacitan <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
