<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%children_kashmir_education}}`.
 */
class m241129_132305_create_children_kashmir_education_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%children_kashmir_education}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(50)->notNull(), 
            'name' => $this->string(255)->notNull(), 
            'year' => $this->integer()->notNull(), 
            'current_information' => $this->text()->notNull(), 
            'job_or_college' => $this->string(255)->notNull(),
        ]);

        $this->addForeignKey(
            'fk-children_kashmir_education-refugee_number', 
            '{{%children_kashmir_education}}',          
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
            'fk-children_kashmir_education-refugee_number',
            '{{%children_kashmir_education}}'
        );
        $this->dropTable('{{%children_kashmir_education}}');
    }
}
