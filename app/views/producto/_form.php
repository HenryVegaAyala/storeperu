<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Producto;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title">Registrar Nuevo Producto</h3>
    </div>

    <div class="container-fluid">
        <p class="note">Los aspectos con <span class="red"> (*) </span> son requeridos.</p>
    </div>

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
    ]); ?>

    <div class="fieldset">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($model, 'Desc_Larga')->textInput(['maxlength' => true]) ?>
                </div>

                <div class="col-sm-6">
                    <?= $form->field($model, 'Desc_Corta')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <?= $form->field($model, 'categoria_producto_Codigo')->dropDownList($model->getCategoria(), ['prompt' => 'Seleccione una Categoria']) ?>
                </div>

                <div class="col-sm-3">
                    <?= $form->field($model, 'Marca_Codigo')->textInput() ?>
                </div>

                <div class="col-sm-3">
                    <?= $form->field($model, 'Precio')->textInput(['maxlength' => true]) ?>
                </div>

                <div class="col-sm-3">
                    <?= $form->field($model, 'Etiqueta')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($model, 'Imagen')->fileInput(['class' => 'cropit-image-input form-control']) ?>
                </div>

                <div class="col-sm-3">
                    <?= $form->field($model, 'Descuento')->textInput(['maxlength' => true]) ?>
                </div>

                <div class="col-sm-3">
                    <?= $form->field($model, 'Duracion')->textInput() ?>
                </div>

            </div>

        </div>

        <div class="panel-footer container-fluid foo">
            <div class="col-sm-12">
                <?= Html::submitButton($model->isNewRecord ? "<i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i> Guardar" : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary ' : 'btn btn-primary ']) ?>
                <?= Html::resetButton($model->isNewRecord ? "<i class=\"fa fa-eraser\" aria-hidden=\"true\"></i> Limpiar" : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
                <?= Html::a("<i class=\"fa fa-chevron-circle-left\" aria-hidden=\"true\"></i> Cancelar", ['producto/index'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>