<?php

namespace app\models\searchs;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pago;

/**
 * PagoSearchs represents the model behind the search form of `app\models\Pago`.
 */
class PagoSearchs extends Pago
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pago', 'Id_Reserva'], 'integer'],
            [['TipPago'], 'safe'],
            [['Monto'], 'number'],
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
        $query = Pago::find();

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
            'Id_Pago' => $this->Id_Pago,
            'Monto' => $this->Monto,
            'Id_Reserva' => $this->Id_Reserva,
        ]);

        $query->andFilterWhere(['like', 'TipPago', $this->TipPago]);

        return $dataProvider;
    }
}
