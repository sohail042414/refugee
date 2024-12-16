<?php

use yii\db\Migration;

class m241202_110133_create_property_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%property}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(30)->unique()->notNull(),
            'refugee_id' => $this->integer()->notNull(),
            'detail' => $this->text()->notNull(),
            'personal_private' => $this->string(255)->notNull(),
            'wife' => $this->string(255)->null(),
            'children' => $this->string(255)->null(),
            'house' => $this->string(255)->null(),
            'plot' => $this->string(255)->null(),
            'jewellery' => $this->string(255)->null(),
            'car' => $this->string(255)->null(),
            'shop' => $this->string(255)->null(),
            'miscellaneous' => $this->string(255)->null(),
        ]);

        // $this->addForeignKey(
        //     'fk-property-refugee_number',
        //     '{{%property}}',
        //     'refugee_number',
        //     '{{%refugee}}',
        //     'refugee_number',
        //     'CASCADE',
        //     'CASCADE'
        // );
    }

    public function safeDown()
    {
        // $this->dropForeignKey('fk-property-refugee_number', '{{%property}}');
        $this->dropTable('{{%property}}');
    }
}
