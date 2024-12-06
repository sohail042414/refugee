<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%economy}}`.
 */
class m241202_105517_create_economy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%economy}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(30)->unique()->notNull(), 
            'monthly_income' => $this->decimal(10, 2)->notNull(),
            'subsistence_allowance' => $this->decimal(10, 2)->null(),
            'da' => $this->decimal(10, 2)->null(),
            'requested_financial_assistance' => $this->decimal(10, 2)->null(),
            'total_monthly_income' => $this->decimal(10, 2)->notNull(),
        ]);

        $this->addForeignKey(
            'fk-economy-refugee_number',
            '{{%economy}}',
            'refugee_number',
            '{{%refugee}}',
            'refugee_number',
            'CASCADE',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-economy-refugee_number', '{{%economy}}');
        $this->dropTable('{{%economy}}');
    }
}
