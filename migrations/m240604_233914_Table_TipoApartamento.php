<?php

use yii\db\Migration;

/**
 * Class m240604_233914_Table_TipoApartamento
 */
class m240604_233914_Table_TipoApartamento extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    { 
        $this->createTable('tipo_apartamento',[
            'Id_TipoApartamento'=>$this->primaryKey(),
            'TipoApartamento'=> $this->string(100)
        ],'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');

    }

    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('tipo_apartamento');

        return true;
    }

   
}
