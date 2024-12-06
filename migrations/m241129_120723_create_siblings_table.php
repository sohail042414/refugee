<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%siblings}}`.
 */
class m241129_120723_create_siblings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%siblings}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(50)->notNull(), 
            'relation' => "ENUM('father', 'mother') NOT NULL", 
            'name' => $this->string(255)->notNull(),
            'alive_deceased' => "ENUM('Alive', 'Deceased') NOT NULL", 
            'cnic' => $this->string(15), 
            'current_address_or_burial' => $this->text(), 
            'occupation' => $this->string(255),
            'phone_number' => $this->string(15), 
        ]);

        $this->addForeignKey(
            'fk-siblings-refugee_number', 
            '{{%siblings}}',             
            'refugee_number',            
            '{{%refugee}}',            
            'refugee_number',           
            'CASCADE',               
            'CASCADE'                    
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-siblings-refugee_number',
            '{{%siblings}}'
        );

        $this->dropTable('{{%siblings}}');
    }
}
