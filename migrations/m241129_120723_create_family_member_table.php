<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%siblings}}`.
 */
class m241129_120723_create_family_member_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%family_member}}', [
            'id' => $this->primaryKey(),
            'refugee_id' => $this->integer()->notNull(),
            'refugee_number' => $this->string(30)->notNull(), 
            'relation' => "ENUM('father', 'mother','brother','sister') NOT NULL", 
            'full_name' => $this->string(100)->notNull(),
            'alive_deceased' => "ENUM('Alive', 'Deceased') NOT NULL", 
            'cnic' => $this->string(15), 
            'current_address_or_burial' => $this->text(), 
            'occupation' => $this->string(255),
            'phone_number' => $this->string(15), 
        ]);

    //     $this->addForeignKey(
    //         'fk-siblings-refugee_number', 
    //         '{{%siblings}}',             
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
        // $this->dropForeignKey(
        //     'fk-siblings-refugee_number',
        //     '{{%siblings}}'
        // );

        $this->dropTable('{{%family_member}}');
    }
}