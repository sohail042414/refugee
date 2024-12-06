<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%children_spouse}}`.
 */
class m241129_115428_create_children_spouse_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
        //children_married

        $this->createTable('{{%children_spouse}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(50)->notNull(),
            'name' => $this->string(255)->notNull(),
            'husband_wife_name' => $this->string(255), //spouse_name
            'date_of_birth' => $this->date(), //
            'date_of_nikah' => $this->date(), //
            'education' => $this->string(255),
            'institution_year' => $this->string(255), // add 2 fields , instituion , passing_year,  for passing_year, it should be 4 characters.  
            'occupation' => $this->string(255),
            'local_or_migrant' => $this->string(50),
            'kids_name_age' => $this->text(),
            'disability' => $this->string(255),
        ]);

        
        $this->addForeignKey(
            'fk-children_spouse-refugee_number', 
            '{{%children_spouse}}',             
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
            'fk-children_spouse-refugee_number',
            '{{%children_spouse}}'
        );

        $this->dropTable('{{%children_spouse}}');
    }
}
