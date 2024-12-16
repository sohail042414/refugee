<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%business}}`.
 */
class m241216_091246_create_business_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%business}}', [
            'id' => $this->primaryKey(),
            //'refugee_number' => $this->string(50)->notNull(),
            'refugee_id' => $this->integer()->notNull(),
            'business_details' => $this->string(255)->notNull(),
            'relation' => "ENUM('self', 'son', 'daughter', 'wife', 'daughter_in_law', 'other') NOT NULL ", //self,son,daughter,wife,daughter_in_law,other,
            'other_details' =>$this->string(50)->null(),// string 50. 
            //'head_of_family' => $this->string(255)->notNull(),
            //'wife' => $this->string(255)->null(),
            //'children' => $this->text()->null(),
            //'business' => $this->string(255)->notNull(),
            'clinic' => "BOOLEAN NOT NULL DEFAULT FALSE", //boolean, checkbox in <form action="" class=""></form>
            'labor' => "BOOLEAN NOT NULL DEFAULT FALSE", //same
            'shop' => "BOOLEAN NOT NULL DEFAULT FALSE",// same
            'from_date' => $this->date()->notNull(),
            'monthly_income' => $this->decimal(10, 2)->notNull(),
        ]);

        // $this->addForeignKey(
        //     'fk-business-refugee_number',
        //     '{{%business}}',
        //     'refugee_number',
        //     '{{%refugee}}',
        //     'refugee_number',
        //     'CASCADE',
        //     'CASCADE'
        // );
    }

    public function safeDown()
    {
        // $this->dropForeignKey(
        //     'fk-business-refugee_number',
        //     '{{%business}}'
        // );

        $this->dropTable('{{%business}}');
    }
}
