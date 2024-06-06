<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $Id_Cliente
 * @property string|null $Nombre
 * @property string|null $Apellido
 * @property string|null $Email
 *
 * @property Reserva[] $reservas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'Apellido', 'Email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Cliente' => 'Id Cliente',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Email' => 'Email',
        ];
    }

    /**
     * Gets query for [[Reservas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::class, ['Id_Cliente' => 'Id_Cliente']);
    }
}
