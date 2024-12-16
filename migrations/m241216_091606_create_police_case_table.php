<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%police_case}}`.
 */
class m241216_091606_create_police_case_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%police_case}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(30)->unique()->notNull(),
            'refugee_id' => $this->integer()->notNull(),
            'details' => $this->text()->notNull(),
            'FIR_crime' => $this->string(255)->notNull(),
            'bail' => $this->decimal(10, 2)->null(),
            'date_of_arrest' => $this->date()->notNull(),
            'date_of_release' => $this->date()->null(),
        ]);

        // $this->addForeignKey(
        //     'fk-police_case-refugee_number',
        //     '{{%police_case}}',
        //     'refugee_number',
        //     '{{%refugee}}',
        //     'refugee_number',
        //     'CASCADE',
        //     'CASCADE'
        // );
    }

    public function safeDown()
    {
        // $this->dropForeignKey('fk-police_case-refugee_number', '{{%police_case}}');
        $this->dropTable('{{%police_case}}');
    }
}

