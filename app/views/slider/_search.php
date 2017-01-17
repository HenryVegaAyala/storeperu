<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SliderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'post',
    ]); ?>

    <div class="fieldset">
        <div class="container-fluid">

            <div class="col-sm-4">
                <?= $form->field($model, 'Titulo') ?>
            </div>

            <div class="col-sm-4">
                <?php echo $form->field($model, 'Estado') ?>
            </div>

            <div class="col-sm-4">
                <?php echo $form->field($model, 'Fecha_Publicacion') ?>
            </div>

        </div>
        <div class="panel-footer container-fluid foo">
            <?= Html::submitButton("<i class=\"fa fa-search\" aria-hidden=\"true\"></i> Buscar", ['class' => 'btn btn-primary', 'id' => 'BtnBuscar']) ?>
            <?= Html::resetButton("<i class=\"fa fa-eraser\" aria-hidden=\"true\"></i> Limpiar", ['class' => 'btn btn-primary']) ?>
            <?= Html::button("<i class=\"fa fa-times\" aria-hidden=\"true\"></i> Cerrar", ['class' => 'btn btn-primary', 'id' => 'BtnCerrar']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
