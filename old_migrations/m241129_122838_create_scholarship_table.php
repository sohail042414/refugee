<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%scholarship}}`.
 */
class m241129_122838_create_scholarship_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%scholarship}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(50)->notNull(), 
            'refugee_id' => $this->integer()->notNull(),
            'details' => $this->text()->notNull(), 
            'head_of_family' => $this->string(255)->notNull(),
            'children_name' => $this->string(255)->notNull(), 
            'scholarship' => $this->string(255)->notNull(),
            'p_type' => $this->string(255)->notNull(), 
            'self' => $this->string(255), 
            'institution' => $this->string(255)->notNull(), 
            'year' => $this->integer()->notNull(), 
        ]);


        // $this->addForeignKey(
        //     'fk-scholarship-refugee_number', 
        //     '{{%scholarship}}',             
        //     'refugee_number',               
        //     '{{%refugee}}',                 
        //     'refugee_number',               
        //     'CASCADE',                      
        //     'CASCADE'                       
        // );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->dropForeignKey(
        //     'fk-scholarship-refugee_number',
        //     '{{%scholarship}}'
        // );

        $this->dropTable('{{%scholarship}}');
    }
}
