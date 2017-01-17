<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Marca */

$this->title = 'Actualizar Marca: ' . $model->Codigo;
$this->params['breadcrumbs'][] = ['label' => 'Marca', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Actualizar Marca';
?>
<div class="marca-update">

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
