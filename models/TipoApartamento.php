<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_apartamento".
 *
 * @property int $Id_TipoApartamento
 * @property string|null $TipoApartamento
 *
 * @property Apartamento[] $apartamentos
 */
class TipoApartamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_apartamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TipoApartamento'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_TipoApartamento' => 'Id Tipo Apartamento',
            'TipoApartamento' => 'Tipo Apartamento',
        ];
    }

    /**
     * Gets query for [[Apartamentos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApartamentos()
    {
        return $this->hasMany(Apartamento::class, ['Id_TipoApartamento' => 'Id_TipoApartamento']);
    }
}
