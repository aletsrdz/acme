<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\LanguageDropdown; // para utilizar LanguageDropDown

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

  <header>
    <img src="<?= Yii::$app->homeUrl?>/../images/UNAM.png" border="1" alt="logo" width="100" height="100">
    <h3 class="text-muted">ENALLTerm</h3>

    <?php
    NavBar::begin([
        //'brandLabel' => Yii::$app->name,
        //'brandLabel' => '<img src="'.Yii::$app->homeUrl.'/../images/UNAM.png" border="1" alt="logo" width="100" height="100">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            //'class' => 'navbar-inverse navbar-fixed-top',
            'class' => 'navbar',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            [
                'label' => Yii::t('app', 'home'),
                'url' => ['/site/index'],
                'linkOptions'=> [],
            ],
            [
                'label' => Yii::t('app', 'about'),
                'url' => ['/site/about']
            ],
            ['label' => Yii::t('app', 'vistaUno'), 'url' => ['/site/justified']],
            ['label' => Yii::t('app', 'contact'), 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
            ['label'=> LanguageDropdown::label(Yii::$app->language), 'items' => LanguageDropdown::widget()]
            
        ],
    ]);
    NavBar::end();
    ?>
    


  </header>

  

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?php if(!empty(Yii::$app->session->getFlash('success'))): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">    
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?= Yii::$app->session->getFlash('success');?>
        </div>
        <?php endif;?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>


  <footer class="footer">
    <p>&copy; Universidad Nacional Autonoma de México © 2019 
Escuela Nacional de Lenguas, Lingüística y Traducttión | http://enallt.unam.mx Ciruito Interior, Cd. Universitaria, 04510. México, D.F. (52) 55-656220690 | Última actualización 07/06/2016 | Créditos </p>
  </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
