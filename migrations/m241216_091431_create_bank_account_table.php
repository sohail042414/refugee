<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bank_account}}`.
 */
class m241216_091431_create_bank_account_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%bank_account}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(30)->unique()->notNull(),
            'refugee_id' => $this->integer()->notNull(),
            'details' => $this->text()->notNull(),
            'head_of_family' => $this->string(255)->notNull(),
            'wife' => $this->string(255)->null(),
            'children' => $this->string(255)->null(),
            'full_name' => $this->string(255)->notNull(),
            'account_number' => $this->string(50)->unique()->notNull(),
            'account_name' => $this->string(255)->notNull(),
        ]);

        // $this->addForeignKey(
        //     'fk-bank_account-refugee_number',
        //     '{{%bank_account}}',
        //     'refugee_number',
        //     '{{%refugee}}',
        //     'refugee_number',
        //     'CASCADE',
        //     'CASCADE'
        // );
    }

    public function safeDown()
    {
        // $this->dropForeignKey('fk-bank_account-refugee_number', '{{%bank_account}}');
        $this->dropTable('{{%bank_account}}');
    }
}
