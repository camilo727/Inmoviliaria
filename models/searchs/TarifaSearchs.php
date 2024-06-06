<?php

namespace app\models\searchs;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tarifa;

/**
 * TarifaSearchs represents the model behind the search form of `app\models\Tarifa`.
 */
class TarifaSearchs extends Tarifa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Tarifa', 'Id_Apartamento'], 'integer'],
            [['fecha_inicio_vigencia', 'fecha_fin_vigencia', 'TipoTarifas'], 'safe'],
            [['valor'], 'number'],
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
        $query = Tarifa::find();

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
            'Id_Tarifa' => $this->Id_Tarifa,
            'fecha_inicio_vigencia' => $this->fecha_inicio_vigencia,
            'fecha_fin_vigencia' => $this->fecha_fin_vigencia,
            'valor' => $this->valor,
            'Id_Apartamento' => $this->Id_Apartamento,
        ]);

        $query->andFilterWhere(['like', 'TipoTarifas', $this->TipoTarifas]);

        return $dataProvider;
    }
}
