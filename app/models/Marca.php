<?php

namespace app\models;

use yii\db\Query;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "marca".
 *
 * @property integer $Codigo
 * @property string $Descripcion
 * @property string $Estado
 *
 * @property Producto[] $productos
 */
class Marca extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marca';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo', 'Descripcion'], 'required'],
            [['Codigo'], 'integer'],
            [['Descripcion'], 'string', 'max' => 60],
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
        return $this->hasMany(Producto::className(), ['Marca_Codigo' => 'Codigo']);
    }

    public function getCodigoMarca()
    {
        $query = new Query();
        $query->select('count(*) + 1 as Codigo')->from('marca');
        $comando = $query->createCommand();
        $data = $comando->queryScalar();
        return $data;
    }

    public function getQueryMarca()
    {
        $query = new Query();
        $query->select('*')->from('marca')->where('estado = 1');
        $comando = $query->createCommand();
        $data = $comando->queryAll();
        return $data;
    }

//    public function getCategoria()
//    {
//        $resultado = ArrayHelper::map(CategoriaProducto::find()->orderBy('Descripcion asc')->where('estado = 1')->asArray()->all(), 'Codigo', 'Descripcion');
//        return $resultado;
//    }
}
