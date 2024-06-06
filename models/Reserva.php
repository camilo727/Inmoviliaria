<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reserva".
 *
 * @property int $Id_Reserva
 * @property string|null $fecha_inicio
 * @property string|null $fecha_fin
 * @property string|null $Estado
 * @property string|null $TipoTarifas
 * @property int|null $Id_Apartamento
 * @property int|null $Id_Cliente
 *
 * @property Apartamento $apartamento
 * @property Cliente $cliente
 * @property Pago[] $pagos
 */
class Reserva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reserva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['Id_Apartamento', 'Id_Cliente'], 'integer'],
            [['Estado'], 'string', 'max' => 100],
            [['TipoTarifas'], 'string', 'max' => 255],
            [['Id_Cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['Id_Cliente' => 'Id_Cliente']],
            [['Id_Apartamento'], 'exist', 'skipOnError' => true, 'targetClass' => Apartamento::class, 'targetAttribute' => ['Id_Apartamento' => 'Id_Apartamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Reserva' => 'Id Reserva',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'Estado' => 'Estado',
            'TipoTarifas' => 'Tipo Tarifas',
            'Id_Apartamento' => 'Id Apartamento',
            'Id_Cliente' => 'Id Cliente',
        ];
    }

    /**
     * Gets query for [[Apartamento]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApartamento()
    {
        return $this->hasOne(Apartamento::class, ['Id_Apartamento' => 'Id_Apartamento']);
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::class, ['Id_Cliente' => 'Id_Cliente']);
    }

    /**
     * Gets query for [[Pagos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPagos()
    {
        return $this->hasMany(Pago::class, ['Id_Reserva' => 'Id_Reserva']);
    }
}
