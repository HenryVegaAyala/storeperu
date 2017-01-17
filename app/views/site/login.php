<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>

<section id="form"><!--form-->
    <div class="container">
        <div class="row">

            <div class="col-sm-5 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Ingrese a su cuenta</h2>
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        ],
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => false, 'placeholder' => 'Usuario', 'class' => ''])->label(false) ?>

                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Contraseña', 'class' => ''])->label(false) ?>

                    <span>
                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"col-lg-6\">{input} {label}</div>", 'class' => ''
                    ]) ?>
                    </span>

                    <?= Html::submitButton('Iniciar Sesión', ['class' => 'btn btn-default', 'name' => 'login-button']) ?>

                    <?php ActiveForm::end(); ?>
                </div><!--/login form-->
            </div>

            <div class="col-sm-1">
                <h2 class="or">O</h2>
            </div>

            <div class="col-sm-5">
                <div class="signup-form"><!--sign up form-->
                    <h2>Nueva Inscripción</h2>
                    <form action="#">
                        <input type="text" placeholder="Nombre"/>
                        <input type="email" placeholder="Correo Electrónico"/>
                        <input type="password" placeholder="Contraseña"/>
                        <button type="submit" class="btn btn-default">Regístrate</button>
                    </form>
                </div><!--/sign up form-->
            </div>

        </div>
    </div>
</section><!--/form-->