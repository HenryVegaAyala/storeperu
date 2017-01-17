<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Slider */

$this->title = 'Actualizar Slider : ' . $model->Codigo;

$this->params['breadcrumbs'][] = ['label' => 'Slider', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Actualizar Slider';
?>
<div class="slider-update">
    
    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
