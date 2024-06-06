<?php

use yii\db\Migration;

/**
 * Class m240605_022909_Table_Cliente
 */
class m240605_022909_Table_Cliente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cliente',[
            'Id_Cliente'=> $this->primaryKey(),
            'Nombre'=>$this->string(100),
            'Apellido'=>$this->string(100),
            'Email'=>$this->string(100),
            
        ],'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');
        
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
