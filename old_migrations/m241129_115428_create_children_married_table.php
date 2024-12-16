<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%children_spouse}}`.
 */
class m241129_115428_create_children_married_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
        //children_married

        $this->createTable('{{%children_married}}', [
            'id' => $this->primaryKey(),
            'refugee_id' => $this->integer(),                    
            'refugee_number' => $this->string(30)->notNull(),
            'full_name' => $this->string(100)->notNull(),
            'spouse_name' => $this->string(100), //spouse_name
            'date_of_birth' => $this->date(), //
            'date_of_nikah' => $this->date(), //
            'education' => $this->string(255),
            'institute' => $this->string(255), // add 2 fields , instituion , passing_year,  for passing_year, it should be 4 characters.  
            'passing_year' => $this->string(255),
            'occupation' => $this->string(255),
            'resident_type' => "ENUM('local', 'migrant') NOT NULL", //in form show dropdown , Local , Migrant  
            'children_details' => $this->text(), //children name and age. 
            'disability' => $this->string(255),
        ]);

        
        // $this->addForeignKey(
        //     'fk-children_spouse-refugee_number', 
        //     '{{%children_spouse}}',             
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
        //     'fk-children_spouse-refugee_number',
        //     '{{%children_spouse}}'
        // );

        $this->dropTable('{{%children_married}}');
    }
}
