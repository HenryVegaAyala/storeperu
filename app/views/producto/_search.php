<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'post',
    ]); ?>

    <div class="fieldset">
        <div class="container-fluid">

            <div class="col-sm-4">
                <?= $form->field($model, 'Desc_Corta')->textInput(['placeholder' => 'Descripción'])->label(false) ?>
            </div>

            <div class="col-sm-4">
                <?= $form->field($model, 'categoria_producto_Codigo')->dropDownList($model->getCategoria(), ['prompt' => 'Seleccione una Categoria'])->label(false) ?>
            </div>

            <div class="col-sm-4">
                <?php  echo $form->field($model, 'Marca_Codigo')->textInput(['placeholder' => 'Marca'])->label(false) ?>
            </div>

            <div class="col-sm-4">
                <?php echo $form->field($model, 'Fecha')->textInput(['placeholder' => 'Fecha'])->label(false) ?>
            </div>

            <div class="col-sm-4">
                <?php echo $form->field($model, 'Etiqueta')->textInput(['placeholder' => 'Etiqueta'])->label(false) ?>
            </div>

            <div class="col-sm-4">
                <?php echo $form->field($model, 'Estado')->textInput(['placeholder' => 'Estado'])->label(false) ?>
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
