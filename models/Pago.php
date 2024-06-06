<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pago".
 *
 * @property int $Id_Pago
 * @property string|null $TipPago
 * @property float|null $Monto
 * @property int|null $Id_Reserva
 *
 * @property Reserva $reserva
 */
class Pago extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pago';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Monto'], 'number'],
            [['Id_Reserva'], 'integer'],
            [['TipPago'], 'string', 'max' => 255],
            [['Id_Reserva'], 'exist', 'skipOnError' => true, 'targetClass' => Reserva::class, 'targetAttribute' => ['Id_Reserva' => 'Id_Reserva']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pago' => 'Id Pago',
            'TipPago' => 'Tip Pago',
            'Monto' => 'Monto',
            'Id_Reserva' => 'Id Reserva',
        ];
    }

    /**
     * Gets query for [[Reserva]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReserva()
    {
        return $this->hasOne(Reserva::class, ['Id_Reserva' => 'Id_Reserva']);
    }
}
