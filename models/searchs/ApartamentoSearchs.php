<?php

namespace app\models\searchs;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Apartamento;

/**
 * ApartamentoSearchs represents the model behind the search form of `app\models\Apartamento`.
 */
class ApartamentoSearchs extends Apartamento
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Apartamento', 'Id_TipoApartamento'], 'integer'],
            [['Apartamento', 'Direccion', 'Ciudad'], 'safe'],
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
        $query = Apartamento::find();

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
            'Id_Apartamento' => $this->Id_Apartamento,
            'Id_TipoApartamento' => $this->Id_TipoApartamento,
        ]);

        $query->andFilterWhere(['like', 'Apartamento', $this->Apartamento])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Ciudad', $this->Ciudad]);

        return $dataProvider;
    }
}
