<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Producto;

/**
 * ProductoSearch represents the model behind the search form about `app\models\Producto`.
 */
class ProductoSearch extends Producto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo', 'Duracion', 'categoria_producto_Codigo', 'Marca_Codigo'], 'integer'],
            [['Desc_Larga', 'Desc_Corta', 'Imagen', 'Fecha', 'Etiqueta', 'Fecha_Agregada', 'Fecha_Modificado', 'Estado'], 'safe'],
            [['Precio', 'Descuento'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Producto::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Codigo' => $this->Codigo,
            'Precio' => $this->Precio,
            'Descuento' => $this->Descuento,
            'Duracion' => $this->Duracion,
            'Fecha' => $this->Fecha,
            'Fecha_Agregada' => $this->Fecha_Agregada,
            'Fecha_Modificado' => $this->Fecha_Modificado,
            'categoria_producto_Codigo' => $this->categoria_producto_Codigo,
            'Marca_Codigo' => $this->Marca_Codigo,
        ]);

        $query->andFilterWhere(['like', 'Desc_Larga', $this->Desc_Larga])
            ->andFilterWhere(['like', 'Desc_Corta', $this->Desc_Corta])
            ->andFilterWhere(['like', 'Imagen', $this->Imagen])
            ->andFilterWhere(['like', 'Etiqueta', $this->Etiqueta])
            ->andFilterWhere(['like', 'Estado', $this->Estado]);

        return $dataProvider;
    }
}
