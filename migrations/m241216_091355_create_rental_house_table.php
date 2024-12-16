<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rental_house}}`.
 */
class m241216_091355_create_rental_house_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%rental_house}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(30)->unique()->notNull(),
            'refugee_id' => $this->integer()->notNull(),
            'house_owner_name' => $this->string(255)->notNull(),
            'address' => $this->text()->notNull(),
            'monthly_rent' => $this->decimal(10, 2)->notNull(),
            'phone_number' => $this->string(15)->notNull(),
        ]);

        // $this->addForeignKey(
        //     'fk-rental_house-refugee_number',
        //     '{{%rental_house}}',
        //     'refugee_number',
        //     '{{%refugee}}',
        //     'refugee_number',
        //     'CASCADE',
        //     'CASCADE'
        // );
    }

    public function safeDown()
    {
        // $this->dropForeignKey('fk-rental_house-refugee_number', '{{%rental_house}}');
        $this->dropTable('{{%rental_house}}');
    }
}
