<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CategoriaProducto */

$this->title = 'Nueva Categoria';

$this->params['breadcrumbs'][] = ['label' => 'Categoria', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoria-producto-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
