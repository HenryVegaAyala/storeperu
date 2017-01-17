<?php

namespace app\models;

use yii\db\Query;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property integer $Codigo
 * @property string $Desc_Larga
 * @property string $Desc_Corta
 * @property string $Precio
 * @property string $Descuento
 * @property string $Imagen
 * @property integer $Duracion
 * @property string $Fecha
 * @property string $Etiqueta
 * @property string $Fecha_Agregada
 * @property string $Fecha_Modificado
 * @property string $Estado
 * @property integer $categoria_producto_Codigo
 * @property integer $Marca_Codigo
 *
 * @property Marca $marcaCodigo
 * @property CategoriaProducto $categoriaProductoCodigo
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo', 'categoria_producto_Codigo', 'Marca_Codigo','Precio', 'Etiqueta', 'Desc_Corta', 'Imagen', 'Desc_Larga'], 'required'],
            [['Codigo', 'Duracion', 'categoria_producto_Codigo', 'Marca_Codigo'], 'integer'],
            [['Precio', 'Descuento'], 'number'],
            [['Fecha', 'Fecha_Agregada', 'Fecha_Modificado'], 'safe'],
            [['Desc_Larga'], 'string', 'max' => 95],
            [['Desc_Corta'], 'string', 'max' => 45],
            [['Imagen'], 'file',
                'maxSize' => 1024 * 1024 * 2, //1 MB
                'extensions' => 'jpg, png',
            ],
            [['Etiqueta', 'Estado'], 'string', 'max' => 1],
            [['Marca_Codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Marca::className(), 'targetAttribute' => ['Marca_Codigo' => 'Codigo']],
            [['categoria_producto_Codigo'], 'exist', 'skipOnError' => true, 'targetClass' => CategoriaProducto::className(), 'targetAttribute' => ['categoria_producto_Codigo' => 'Codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codigo' => 'Codigo',
            'Desc_Larga' => 'Descripción Detallada',
            'Desc_Corta' => 'Descripción Resumida',
            'Precio' => 'Precio',
            'Descuento' => 'Descuento',
            'Imagen' => 'Imagen',
            'Duracion' => 'Duración',
            'Fecha' => 'Fecha',
            'Etiqueta' => 'Etiqueta',
            'Fecha_Agregada' => 'Fecha  Agregada',
            'Fecha_Modificado' => 'Fecha  Modificado',
            'Estado' => 'Estado',
            'categoria_producto_Codigo' => 'Categoria',
            'Marca_Codigo' => 'Marca',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarcaCodigo()
    {
        return $this->hasOne(Marca::className(), ['Codigo' => 'Marca_Codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoriaProductoCodigo()
    {
        return $this->hasOne(CategoriaProducto::className(), ['Codigo' => 'categoria_producto_Codigo']);
    }

    public function getCodigoProducto()
    {
        $query = new Query();
        $query->select('count(*) + 1 as Codigo')->from('producto');
        $comando = $query->createCommand();
        $data = $comando->queryScalar();
        return $data;
    }

    public function getQuerySlider()
    {
        $query = new Query();
        $query->select('Desc_Larga,Precio,Imagen')->from('producto')->where('estado = 1');
        $comando = $query->createCommand();
        $data = $comando->queryAll();
        return $data;
    }

    public function getCategoria()
    {
        $resultado =  ArrayHelper::map(CategoriaProducto::find()->orderBy('Descripcion asc')->where('estado = 1')->asArray()->all(), 'Codigo', 'Descripcion');
        return $resultado;
    }
}
