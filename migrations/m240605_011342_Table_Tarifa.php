<?php

use yii\db\Migration;

/**
 * Class m240605_011342_Table_Tarifa
 */
class m240605_011342_Table_Tarifa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tarifa',[
            'Id_Tarifa'=> $this->primaryKey(),
            'fecha_inicio_vigencia'=>$this->date(),
            'fecha_fin_vigencia'=>$this->date(),
            'valor'=>$this->decimal(10,2),
            'TipoTarifas'=>$this->string(),
            'Id_Apartamento'=>$this->integer(),
        ],'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');
        
         $this->addForeignKey('fk_tarifa_apartamento','tarifa', 'Id_Apartamento', 'apartamento','Id_Apartamento' ,'RESTRICT', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        

        $this->dropTable('tarifa');

        return true;
    }
}
