<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href=""><i class="fa fa-phone"></i> +51 955 201 758</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@dhstore.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/DHstore-Per%C3%BA-685245614987598/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <?php if (Yii::$app->user->isGuest) { ?>
                                <a href="<?= Url::to(['/site/index']) ?>"><?= Html::img('images/logo.png'); ?></a>
                            <?php } else { ?>
                                <a href="<?= Url::to(['/site/face']) ?>"><?= Html::img('images/logo.png'); ?></a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <?php
                                if (Yii::$app->user->isGuest) {
                                    echo "<li><a href=" . Url::to(['/']) . "><span class=\"fa fa-star\"></span> Lista de Productos </a></li>";
                                    echo "<li><a href=" . Url::to(['/']) . "><span class=\"fa fa-crosshairs\"></span> Promociones </a></li>";
                                    echo "<li><a href=" . Url::to(['/site/login']) . "><span class=\"fa fa-lock\"></span> Iniciar Sesión </a></li>";
                                } else {
                                    echo "<li><a href=" . Url::to(['/slider/index']) . "><span class=\"fa fa-bars\"></span> Carrusel </a></li>";
                                    echo "<li><a href=" . Url::to(['/marca/index']) . "><span class=\"fa fa-sliders\"></span> Marca </a></li>";
                                    echo "<li><a href=" . Url::to(['/categoria-producto/index']) . "><span class=\"fa fa-bookmark\"></span> Categoria </a></li>";
                                    echo "<li><a href=" . Url::to(['/producto/index']) . "><span class=\"fa fa-book\"></span> Productos </a></li>";

                                    echo
                                        '<li>'
                                        . Html::beginForm(['/site/logout'], 'post')
                                        . Html::submitButton(
                                            "<span class='fa fa-unlock'></span>" . ' Cerrar Sesión (' . strtoupper(Yii::$app->user->identity->username) . ')',
                                            ['class' => 'btn-link logout']
                                        )
                                        . Html::endForm()
                                        . '</li>';
                                }

                                ?>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <?php if (Yii::$app->user->isGuest): ?>
            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="<?= Url::to(['/']) ?>" class="active">Inicio</a></li>

                                    <li class="dropdown"><a href="#">Tienda<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="shop.html">Novedades</a></li>
                                            <li><a href="product-details.html">Detallades del Producto</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="blog.html">Clientes Satisfechos</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="contact-us.html">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Búsqueda"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        <?php endif; ?>
    </header><!--/header-->

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div><!--/Breadcrumbs-->
</div>

<footer id="footer"><!--Footer-->

    <div class="footer-top">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>SERVICIO</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Ayuda en linea</a></li>
                            <li><a href="">Contáctenos</a></li>
                            <li><a href="">Estado del pedido</a></li>
                            <li><a href="">Cambiar locación</a></li>
                            <li><a href="">Preguntas Frecue.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>COMPRA</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Audifonos</a></li>
                            <li><a href="">Cargadores</a></li>
                            <li><a href="">Usb</a></li>
                            <li><a href="">Accesorios</a></li>
                            <li><a href="">Otros</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>POLÍTICAS</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Términos de Uso</a></li>
                            <li><a href="">Política de Privacidad</a></li>
                            <li><a href="">Política de Reembolso</a></li>
                            <li><a href="">Sistema de cobranza</a></li>
                            <li><a href="">Ticket de Promoción</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>DH-STORE</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Información de la empresa</a></li>
                            <li><a href="">Entregas</a></li>
                            <li><a href="">Ubicación de la tienda</a></li>
                            <li><a href="">Affillate</a></li>
                            <li><a href="">Derechos Reserv.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>SOBRE DH-STORE</h2>
                        <form action="" class="searchform">
                            <input type="text" placeholder="Tú correo electrónico"/>
                            <button type="submit" class="btn btn-default"><i
                                    class="fa fa-arrow-circle-o-right"></i>
                            </button>
                            <p>Recibe las actualizaciones más recientes <br/>de
                                nuestro sitio y promociones.</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="text-center">&copy; <?= date('Y') ?> DH Store Todos los derechos reservados.</p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
