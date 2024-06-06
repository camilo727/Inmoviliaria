<?php

use yii\db\Migration;

/**
 * Class m240605_023628_Table_Reserva
 */
class m240605_023628_Table_Reserva extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('reserva',[
            'Id_Reserva'=> $this->primaryKey(),
            'Codigo'=>$this->string(100),
            'fecha_inicio'=>$this->date(),
            'fecha_fin'=>$this->date(),
            'Estado'=>$this->string(100),
            'TipoTarifas'=>$this->string(),
            'Id_Apartamento'=>$this->integer(),
            'Id_Cliente'=>$this->integer(),
        ],'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');
        
         $this->addForeignKey('fk_reserva_apartamento','reserva', 'Id_Apartamento', 'apartamento','Id_Apartamento' ,'RESTRICT', 'CASCADE');
         $this->addForeignKey('fk_cliente_apartamento','reserva', 'Id_Cliente', 'cliente','Id_Cliente' ,'RESTRICT', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('cliente');

        return true;
    }

 
}
