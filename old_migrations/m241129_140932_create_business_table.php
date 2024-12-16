<?php

use yii\db\Migration;

class m241129_140932_create_business_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%business}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(50)->notNull(),
            'refugee_id' => $this->integer()->notNull(),
            'details' => $this->text()->notNull(),
            'head_of_family' => $this->string(255)->notNull(),
            'wife' => $this->string(255)->null(),
            'children' => $this->text()->null(),
            'business' => $this->string(255)->notNull(),
            'clinic_other' => $this->string(255)->null(),
            'labor' => $this->string(255)->null(),
            'shop' => $this->string(255)->null(),
            'since_when' => $this->date()->notNull(),
            'total_monthly_income' => $this->decimal(10, 2)->notNull(),
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
