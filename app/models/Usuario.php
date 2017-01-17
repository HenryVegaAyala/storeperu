<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $Codigo
 * @property string $Nombre
 * @property string $Correo
 * @property string $Usuario
 * @property string $Contrasena
 * @property string $Contrasena_Encrip
 * @property string $Estado
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo'], 'required'],
            [['Codigo'], 'integer'],
            [['Nombre', 'Correo', 'Usuario', 'Contrasena', 'Contrasena_Encrip'], 'string', 'max' => 45],
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
            'Nombre' => 'Nombre',
            'Correo' => 'Correo',
            'Usuario' => 'Usuario',
            'Contrasena' => 'Contrasena',
            'Contrasena_Encrip' => 'Contrasena  Encrip',
            'Estado' => 'Estado',
        ];
    }
}
