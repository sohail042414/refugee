<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%children_kashmir_education}}`.
 */
class m241216_091024_create_children_kashmir_education_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%children_kashmir_education}}', [
            'id' => $this->primaryKey(),
            // 'refugee_number' => $this->string(50)->notNull(),
            'refugee_id' => $this->integer()->notNull(), 
            'full_name' => $this->string(255)->notNull(), 
            'year' => $this->integer()->notNull(), 
            'current_information' => $this->string(255)->notNull(),  // string 255
            'job' => $this->string(255)->notNull(), // 2 fields job and college 
            'college' => $this->string(255)->notNull(),
        ]);

        // $this->addForeignKey(
        //     'fk-children_kashmir_education-refugee_number', 
        //     '{{%children_kashmir_education}}',          
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
        //     'fk-children_kashmir_education-refugee_number',
        //     '{{%children_kashmir_education}}'
        // );
        $this->dropTable('{{%children_kashmir_education}}');
    }
}
