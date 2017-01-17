<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Slider */

$this->title = 'Slider Nuevo';

$this->params['breadcrumbs'][] = ['label' => 'Slider', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
