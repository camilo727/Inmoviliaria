<?php

use yii\db\Migration;

/**
 * Class m240605_000604_Table_Apartamento
 */
class m240605_000604_Table_Apartamento extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('apartamento',[
            'Id_Apartamento'=> $this->primaryKey(),
            'Apartamento'=>$this->string(100),
            'Direccion'=>$this->string(255),
            'Ciudad'=>$this->string(100),
            'Id_TipoApartamento'=>$this->integer(),
        ],'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');
        $this->addForeignKey('fk_apartamento_tipo_apartamento','apartamento', 'Id_TipoApartamento', 'tipo_apartamento','Id_TipoApartamento' ,'RESTRICT', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       
        $this->dropTable('apartamento');
        return True;
    }
}
