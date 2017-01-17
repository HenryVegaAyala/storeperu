<?php

namespace app\models;

use yii\db\Query;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property integer $Codigo
 * @property string $Titulo
 * @property string $Contenido
 * @property string $Imagen
 * @property string $Precio
 * @property string $Link
 * @property string $Estado
 * @property string $Fecha_Publicacion
 * @property string $Fecha_Actualizacion
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo', 'Titulo', 'Contenido', 'Imagen', 'Estado'], 'required'],
            [['Codigo'], 'integer'],
            [['Precio'], 'number'],
            [['Fecha_Publicacion', 'Fecha_Actualizacion'], 'safe'],
            [['Titulo'], 'string', 'max' => 30],
            [['Contenido'], 'string', 'max' => 80],
            [['Imagen'], 'file',
                'maxSize' => 1024 * 1024 * 2, //1 MB
                'extensions' => ['png', 'jpg'],
            ],
            [['Link'], 'string', 'max' => 60],
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
            'Titulo' => 'Titulo',
            'Contenido' => 'Contenido',
            'Imagen' => 'Imagen',
            'Precio' => 'Precio',
            'Link' => 'Link',
            'Estado' => 'Estado',
            'Fecha_Publicacion' => 'Fecha  Publicacion',
            'Fecha_Actualizacion' => 'Fecha  Actualizacion',
        ];
    }

    public function getCodigoSlider()
    {
        $query = new Query();
        $query->select('count(*) + 1 as Codigo')->from('slider');
        $comando = $query->createCommand();
        $data = $comando->queryScalar();
        return $data;
    }

    public function getQuerySlider()
    {
        $query = new Query();
        $query->select('*')->from('slider')->where('estado = 1');
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
