<?php

use yii\db\Migration;

class m241129_133413_create_govt_job_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%govt_job}}', [
            'id' => $this->primaryKey(),
            'refugee_number' => $this->string(50)->notNull(),
            'refugee_id' => $this->integer()->notNull(),
            'details' => $this->text()->notNull(),
            'head_of_family' => $this->string(255)->notNull(),
            'wife' => $this->string(255)->null(),
            'children' => $this->text()->null(),
            'department' => $this->string(255)->notNull(),
            'date_of_employment' => $this->date()->notNull(),
            'designation_position' => $this->string(255)->notNull(),
            'grade' => $this->integer()->notNull(),
            'salary' => $this->decimal(10, 2)->notNull(),
        ]);

        // $this->addForeignKey(
        //     'fk-govt_job-refugee_number',
        //     '{{%govt_job}}',
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
        //     'fk-govt_job-refugee_number',
        //     '{{%govt_job}}'
        // );

        $this->dropTable('{{%govt_job}}');
    }
}
