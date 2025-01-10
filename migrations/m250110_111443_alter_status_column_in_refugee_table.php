<?php

use yii\db\Migration;

/**
 * Class m250110_111443_alter_status_column_in_refugee_table
 */
class m250110_111443_alter_status_column_in_refugee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%refugee}}', 'status', $this->string(50)->defaultValue('draft'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%refugee}}', 'status', $this->string(20)->defaultValue('draft'));
    }
}