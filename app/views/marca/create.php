<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Marca */

$this->title = 'Nueva Marca';
$this->params['breadcrumbs'][] = ['label' => 'Nueva', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marca-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
