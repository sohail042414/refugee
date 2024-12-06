<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%children}}`.
 */
class m241126_122423_create_children_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%children}}', [
            'id' => $this->primaryKey(),   
            'refugee_id' => $this->integer(),                    
            'name' => $this->string(60)->notNull(),            
            'date_of_birth' => $this->date()->notNull(),        
            'education' => $this->string(100)->notNull(),     
            'educational_institution_year' => $this->string(150), 
            'occupation' => $this->string(100),               
            'disability' => $this->string(100),                
            'refugee_number' => $this->string(30)->notNull(),  
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'), 
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'), 
        ]);

        
        // $this->addForeignKey(
        //     'fk-children-refugee_number',  
        //     '{{%children}}',              
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
        //     'fk-children-refugee_number',
        //     '{{%children}}'
        // );

        $this->dropTable('{{%children}}');
    }
}