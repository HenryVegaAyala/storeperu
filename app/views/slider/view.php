<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Slider */

$this->title = "Vista Detallada";
$this->params['breadcrumbs'][] = ['label' => 'Slider'];
?>
<div class="slider-view">

<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center>
                <h3 class="panel-title"><?= Html::encode($this->title) ?> del Producto N° -
                    <strong><?php echo $model->Codigo; ?></strong></h3>
            </center>
        </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Titulo',
            'Contenido',
            'Imagen',
            'Precio',
            'Link',
            'Fecha_Publicacion',
            'Fecha_Actualizacion',
            'Estado',
                'Imagen',
                [
                    'attribute' => 'Ruta de la Imagen',
                    'value' => Yii::getAlias('@dhstoreImgUrl').'/'.$model->Imagen,
                ],
                [
                    'attribute' => 'Vista de la Imagen',
                    'value' => Yii::getAlias('@dhstoreImgPathSliderUrl').'/'.$model->Imagen,
                    'format' => ['image',['width' => '300' , 'height' => '200']]
                ]

        ],
    ]) ?>

        <div class="panel-footer container-fluid foo">
            <p>
                <?= Html::a("<i class=\"fa fa-chevron-circle-left\" aria-hidden=\"true\"></i> Regresar", ['index'], ['class' => 'btn btn-primary']) ?>
                <?= Html::a("<i class=\"fa fa-window-close-o\" aria-hidden=\"true\"></i> Eliminar", ['delete', 'id' => $model->Codigo], [
                    'class' => 'btn btn-primary',
                    'data' => [
                        'confirm' => '¿Estás seguro de eliminar este slider?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
        </div>
    </div>
</div>
