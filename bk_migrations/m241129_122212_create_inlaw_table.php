<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inlaw}}`.
 */
class m241129_122212_create_inlaw_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inlaw}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(50)->notNull(),
            'relation' => "ENUM('father-in-law', 'mother-in-law') NOT NULL",
            'name' => $this->string(255)->notNull(),
            'alive_deceased' => "ENUM('Alive', 'Deceased') NOT NULL", 
            'cnic' => $this->string(15), 
            'current_address_or_burial' => $this->text(), 
            'occupation' => $this->string(255),
            'phone_number' => $this->string(15), 
        ]);

        $this->addForeignKey(
            'fk-inlaw-refugee_number', 
            '{{%inlaw}}',              
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
            'fk-inlaw-refugee_number',
            '{{%inlaw}}'
        );

        $this->dropTable('{{%inlaw}}');
    }
}
