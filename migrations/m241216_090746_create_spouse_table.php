<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spouse}}`.
 */
class m241216_090746_create_spouse_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spouse}}', [
            'id' => $this->primaryKey(),
            'refugee_id' => $this->integer(),
            'refugee_number' => $this->string(30)->notNull(),  
            'full_name' => $this->string(60)->notNull(), 
            'cnic' => $this->string(20)->unique()->notNull(), 
            'date_of_nikah' => $this->date()->notNull(),
            'resident_type' => "ENUM('local', 'migrant') NOT NULL", //in form show dropdown , Local , Migrant  
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
