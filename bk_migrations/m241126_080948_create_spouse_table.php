<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spouse}}`.
 */
class m241126_080948_create_spouse_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spouse}}', [
            'id' => $this->primaryKey(),
            'refugee_id' => $this->integer(),
            'wife_first_name' => $this->string(60)->notNull(), //first_name
            'wife_second_name' => $this->string(60)->notNull(), //last_name
            'cnic' => $this->string(20)->unique()->notNull(), 
            'refugee_number' => $this->string(30)->notNull(), 
            'date_of_nikah' => $this->date()->notNull(), 
            'local_or_migrant' => $this->string(20)->notNull(), 
            //'resident_type' => $this->string(20)->notNull(), in form show dropdown , Local , Migrant  
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'), 
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);


        // $this->addForeignKey(
        //     'fk_spouse_refugee_refugee_id',
        //     '{{%spouse}}',            
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
        //     'fk-spouse-refugee_number',
        //     '{{%spouse}}'
        // );


        $this->dropTable('{{%spouse}}');
    }
}
