<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%job}}`.
 */
class m241216_110101_create_job_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%job}}', [
            'id' => $this->primaryKey(),
            // 'refugee_number' => $this->string(50)->notNull(),
            'job_type' => "ENUM('govt', 'public', 'private') NOT NULL ", //govt,public,private
            'refugee_id' => $this->integer()->notNull(),
            //'self' => $this->boolean()->defaultValue(false),
            //'details' => $this->text()->notNull(),
            //'head_of_family' => $this->string(255)->notNull(),
            'relation' => "ENUM('self', 'son', 'daughter', 'wife', 'daughter_in_law', 'other') NOT NULL", //self,son,daughter,wife,daughter_in_law,other,
            'other_details'  => $this->string(50)->notNull(), // string 50. 
            // 'wife' => $this->string(255)->null(),
            // 'children' => $this->text()->null(),
            'department' => $this->string(100)->notNull(),
            'date_of_employment' => $this->date()->notNull(),
            'designation' => $this->string(100)->notNull(),
            'grade' => $this->integer()->notNull(), //string 20
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

        $this->dropTable('{{%job}}');
    }
}
