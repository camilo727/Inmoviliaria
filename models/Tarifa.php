<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarifa".
 *
 * @property int $Id_Tarifa
 * @property string|null $fecha_inicio_vigencia
 * @property string|null $fecha_fin_vigencia
 * @property float|null $valor
 * @property string|null $TipoTarifas
 * @property int|null $Id_Apartamento
 *
 * @property Apartamento $apartamento
 */
class Tarifa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tarifa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha_inicio_vigencia', 'fecha_fin_vigencia'], 'safe'],
            [['valor'], 'number'],
            [['Id_Apartamento'], 'integer'],
            [['TipoTarifas'], 'string', 'max' => 255],
            [['Id_Apartamento'], 'exist', 'skipOnError' => true, 'targetClass' => Apartamento::class, 'targetAttribute' => ['Id_Apartamento' => 'Id_Apartamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Tarifa' => 'Id Tarifa',
            'fecha_inicio_vigencia' => 'Fecha Inicio Vigencia',
            'fecha_fin_vigencia' => 'Fecha Fin Vigencia',
            'valor' => 'Valor',
            'TipoTarifas' => 'Tipo Tarifas',
            'Id_Apartamento' => 'Id Apartamento',
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
}
