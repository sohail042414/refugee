<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inlaw}}`.
 */
class m241216_090915_create_inlaw_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inlaw}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(50)->notNull(),
            'refugee_id' => $this->integer()->notNull(),
            'relation' => "ENUM('father-in-law', 'mother-in-law') NOT NULL",
            'name' => $this->string(255)->notNull(),
            'living_status' => "ENUM('alive', 'dead') NOT NULL DEFAULT 'alive'",  // 'alive_deceased' => "ENUM('Alive', 'Deceased') NOT NULL", 
            'cnic' => $this->string(15), 
            'current_address' => $this->string(255)->defaultValue(NULL),   //'current_address_or_burial' => $this->text(), 
            'burial_address' => $this->string(255)->defaultValue(NULL),
            'occupation' => $this->string(255),
            'phone_number' => $this->string(15), 
        ]);

    //     $this->addForeignKey(
    //         'fk-inlaw-refugee_number', 
    //         '{{%inlaw}}',              
    //         'refugee_number',         
    //         '{{%refugee}}',          
    //         'refugee_number',         
    //         'CASCADE',                
    //         'CASCADE'                  
    //     );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    //     $this->dropForeignKey(
    //         'fk-inlaw-refugee_number',
    //         '{{%inlaw}}'
    //     );

        $this->dropTable('{{%inlaw}}');
    }
}