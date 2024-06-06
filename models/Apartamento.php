<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apartamento".
 *
 * @property int $Id_Apartamento
 * @property string|null $Apartamento
 * @property string|null $Direccion
 * @property string|null $Ciudad
 * @property int|null $Id_TipoApartamento
 *
 * @property Reserva[] $reservas
 * @property Tarifa[] $tarifas
 * @property TipoApartamento $tipoApartamento
 */
class Apartamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apartamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_TipoApartamento'], 'integer'],
            [['Apartamento', 'Ciudad'], 'string', 'max' => 100],
            [['Direccion'], 'string', 'max' => 255],
            [['Id_TipoApartamento'], 'exist', 'skipOnError' => true, 'targetClass' => TipoApartamento::class, 'targetAttribute' => ['Id_TipoApartamento' => 'Id_TipoApartamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Apartamento' => 'Id Apartamento',
            'Apartamento' => 'Apartamento',
            'Direccion' => 'Direccion',
            'Ciudad' => 'Ciudad',
            'Id_TipoApartamento' => 'Id Tipo Apartamento',
        ];
    }

    /**
     * Gets query for [[Reservas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::class, ['Id_Apartamento' => 'Id_Apartamento']);
    }

    /**
     * Gets query for [[Tarifas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTarifas()
    {
        return $this->hasMany(Tarifa::class, ['Id_Apartamento' => 'Id_Apartamento']);
    }

    /**
     * Gets query for [[TipoApartamento]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTipoApartamento()
    {
        return $this->hasOne(TipoApartamento::class, ['Id_TipoApartamento' => 'Id_TipoApartamento']);
    }
}
