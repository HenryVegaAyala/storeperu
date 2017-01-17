<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CategoriaProducto */

$this->title = 'Actualizar Categoria : ' . $model->Codigo;

$this->params['breadcrumbs'][] = ['label' => 'Categoria', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Actualizar Categoria';
?>
<div class="categoria-producto-update">

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
