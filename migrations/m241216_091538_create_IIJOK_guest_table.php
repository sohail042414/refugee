<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%IIJOK_guest}}`.
 */
class m241216_091538_create_IIJOK_guest_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%IIJOK_guest}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(30)->unique()->notNull(),
            'refugee_id' => $this->integer()->notNull(),
            'type' => "ENUM('To IIJOK', 'From IIJOK') NOT NULL ",
            'details' => $this->text()->notNull(),
            'full_name' => $this->string(255)->notNull(),
            'relation' => "ENUM('guest', 'relative', 'visit') NOT NULL DEFAULT 'guest'", 
            'date_of_arrival' => $this->date()->notNull(),
            'date_of_return' => $this->date()->null(),
            'purpose_of_arrival' => $this->string(255)->notNull(),
            'date_of_departure' => $this->date()->null(),
            'purpose_of_departure' => $this->string(255)->null(),
        ]);

        // $this->addForeignKey(
        //     'fk-IIJOK_guest-refugee_number',
        //     '{{%IIJOK_guest}}',
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
        // $this->dropForeignKey('fk-IIJOK_guest-refugee_number', '{{%IIJOK_guest}}');
        $this->dropTable('{{%IIJOK_guest}}');
    }
}
