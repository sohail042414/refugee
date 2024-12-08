<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%refugee}}`.
 */
class m241118_104933_create_refugee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%refugee}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(60)->notNull(),
            'father_guardian' => $this->string(60)->notNull(), 
            'birth_date' => $this->date()->notNull(),
            'cnic' => $this->string(20)->unique()->notNull(),
            'refugee_number' => $this->string(30)->unique()->notNull(), 
            'phone_no' => $this->string(15)->notNull(),
            'education' => $this->string(100),
            'caste' => $this->string(50),
            'disability' => $this->string(100),
            'marital_status' => $this->string(20),
            'is_women_guardian' => $this->boolean()->null(),
            'passport_no' => $this->string(20)->unique(), 
            'temporary_address' => $this->string(255),
            'permanent_address' => $this->string(255),
            'iiojk_address' => $this->string(255), 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%refugee}}');
    }
}
