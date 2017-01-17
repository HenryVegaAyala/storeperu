<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Slider;

/**
 * SliderSearch represents the model behind the search form about `app\models\Slider`.
 */
class SliderSearch extends Slider
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo'], 'integer'],
            [['Titulo', 'Contenido', 'Imagen', 'Link', 'Estado', 'Fecha_Publicacion', 'Fecha_Actualizacion'], 'safe'],
            [['Precio'], 'number'],
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
        $query = Slider::find();

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
            'Fecha_Publicacion' => $this->Fecha_Publicacion,
            'Fecha_Actualizacion' => $this->Fecha_Actualizacion,
        ]);

        $query->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Contenido', $this->Contenido])
            ->andFilterWhere(['like', 'Imagen', $this->Imagen])
            ->andFilterWhere(['like', 'Link', $this->Link])
            ->andFilterWhere(['like', 'Estado', $this->Estado]);

        return $dataProvider;
    }
}
