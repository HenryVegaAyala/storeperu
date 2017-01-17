<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */

$this->title = 'Actualizar Producto : ' . $model->Codigo;

$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Actualizar Producto';
?>
<div class="producto-update">

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
