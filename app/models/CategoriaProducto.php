<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "categoria_producto".
 *
 * @property integer $Codigo
 * @property string $Descripcion
 * @property string $Estado
 *
 * @property Producto[] $productos
 */
class CategoriaProducto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoria_producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo'], 'required'],
            [['Codigo'], 'integer'],
            [['Descripcion'], 'string', 'max' => 95],
            [['Estado'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codigo' => 'Codigo',
            'Descripcion' => 'Descripcion',
            'Estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Producto::className(), ['categoria_producto_Codigo' => 'Codigo']);
    }

    public function getQueryCategoria()
    {
        $query = new Query();
        $query->select('*')->from('categoria_producto')->where('estado = 1');
        $comando = $query->createCommand();
        $data = $comando->queryAll();
        return $data;
    }

}
