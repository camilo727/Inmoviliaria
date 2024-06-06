<?php

use yii\db\Migration;

/**
 * Class m240605_025033_Table_Pagos
 */
class m240605_025033_Table_Pagos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pago',[
            'Id_Pago'=> $this->primaryKey(),
            'TipPago'=>$this->string(),
            'Monto'=>$this->decimal(10,2),
            'Id_Reserva'=>$this->integer(),
        ],'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');
        
         $this->addForeignKey('fk_pago_apartamento','pago', 'Id_Reserva', 'reserva','Id_Reserva' ,'RESTRICT', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pago');

        return true;
    }

    
}
