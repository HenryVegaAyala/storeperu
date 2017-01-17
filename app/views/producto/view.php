<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */

$this->title = "Vista Detallada";
$this->params['breadcrumbs'][] = ['label' => 'Productos'];
?>

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
            'categoria_producto_Codigo',
            'Desc_Larga',
            'Desc_Corta',
            'Precio',
            'Descuento',
            'Duracion',
            'Etiqueta',
            'Fecha_Agregada',
            'Fecha_Modificado',
            'Estado',
                'Imagen',
                [
                    'attribute' => 'Ruta de la Imagen',
                    'value' => Yii::getAlias('@dhstoreImgUrl').'/'.$model->Imagen,
                ],
                [
                    'attribute' => 'Vista de la Imagen',
                    'value' => Yii::getAlias('@dhstoreImgUrl').'/'.$model->Imagen,
                    'format' => ['image',['width' => '350' , 'height' => '200']]
                ]
        ],
    ]) ?>

        <div class="panel-footer container-fluid foo">
            <p>
                <?= Html::a("<i class=\"fa fa-chevron-circle-left\" aria-hidden=\"true\"></i> Regresar", ['producto/index'], ['class' => 'btn btn-primary']) ?>
                <?= Html::a("<i class=\"fa fa-window-close-o\" aria-hidden=\"true\"></i> Eliminar", ['delete', 'id' => $model->Codigo], [
                    'class' => 'btn btn-primary',
                    'data' => [
                        'confirm' => '¿Estás seguro de eliminar este producto?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
        </div>
    </div>
</div>
