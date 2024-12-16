<?php

use yii\db\Migration;

class m241129_140503_create_private_job_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%private_job}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(50)->notNull(),
            'refugee_id' => $this->integer()->notNull(),
            'details' => $this->text()->notNull(),
            'head_of_family' => $this->string(255)->notNull(),
            'wife' => $this->string(255)->null(),
            'department' => $this->string(255)->notNull(),
            'date_of_employment' => $this->date()->notNull(),
            'designation_position' => $this->string(255)->notNull(),
            'grade' => $this->integer()->notNull(),
            'salary' => $this->decimal(10, 2)->notNull(),
        ]);

        // $this->addForeignKey(
        //     'fk-private_job-refugee_number',
        //     '{{%private_job}}',
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
        //     'fk-private_job-refugee_number',
        //     '{{%private_job}}'
        // );

        $this->dropTable('{{%private_job}}');
    }
}
