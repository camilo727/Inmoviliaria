<?php

namespace app\models\searchs;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reserva;

/**
 * ReservaSearchs represents the model behind the search form of `app\models\Reserva`.
 */
class ReservaSearchs extends Reserva
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Reserva', 'Id_Apartamento', 'Id_Cliente'], 'integer'],
            [['fecha_inicio', 'fecha_fin', 'Estado', 'TipoTarifas'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Reserva::find();

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
            'Id_Reserva' => $this->Id_Reserva,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'Id_Apartamento' => $this->Id_Apartamento,
            'Id_Cliente' => $this->Id_Cliente,
        ]);

        $query->andFilterWhere(['like', 'Estado', $this->Estado])
            ->andFilterWhere(['like', 'TipoTarifas', $this->TipoTarifas]);

        return $dataProvider;
    }
}
