<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Marca */

$this->title = "Vista Detallada";
$this->params['breadcrumbs'][] = ['label' => 'Marca'];
?>
<div class="marca-view">

    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>
                    <h3 class="panel-title"><?= Html::encode($this->title) ?> de la Marca N° -
                        <strong><?php echo $model->Codigo; ?></strong></h3>
                </center>
            </div>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'Descripcion',
                    'Estado',
                ],
            ]) ?>

            <div class="panel-footer container-fluid foo">
                <p>
                    <?= Html::a("<i class=\"fa fa-chevron-circle-left\" aria-hidden=\"true\"></i> Regresar", ['index'], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a("<i class=\"fa fa-window-close-o\" aria-hidden=\"true\"></i> Eliminar", ['delete', 'id' => $model->Codigo], [
                        'class' => 'btn btn-primary',
                        'data' => [
                            'confirm' => '¿Estás seguro de eliminar esta marca?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
        </div>
    </div>
