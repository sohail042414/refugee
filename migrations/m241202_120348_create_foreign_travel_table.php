<?php

use yii\db\Migration;

class m241202_120348_create_foreign_travel_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%foreign_travel}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(30)->unique()->notNull(),
            'details' => $this->text()->notNull(),
            'personal_private' => $this->string(255)->notNull(),
            'wife' => $this->string(255)->null(),
            'children' => $this->string(255)->null(),
            'passport_number' => $this->string(50)->unique()->notNull(),
            'country_name' => $this->string(255)->notNull(),
            'purpose_of_travel' => $this->string(255)->notNull(),
            'date_of_departure' => $this->date()->notNull(),
            'date_of_return' => $this->date()->null(),
            'occupation_abroad' => $this->string(255)->null(),
            'income' => $this->decimal(10, 2)->null(),
        ]);

        $this->addForeignKey(
            'fk-foreign_travel-refugee_number',
            '{{%foreign_travel}}',
            'refugee_number',
            '{{%refugee}}',
            'refugee_number',
            'CASCADE',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-foreign_travel-refugee_number', '{{%foreign_travel}}');
        $this->dropTable('{{%foreign_travel}}');
    }
}
