<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%refugee}}`.
 */
class m241216_090733_create_refugee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%refugee}}', [
            'id' => $this->primaryKey()->unsigned(),
            'camp_id' => $this->integer()->notNull(),
            'gender' => "ENUM('male','female','other') NOT NULL DEFAULT 'male'", //in form show dropdown , Local , Migrant  
            'full_name' => $this->string(60)->notNull(),
            'refugee_number' => $this->string(30)->unique()->notNull(), // this is number assigned manually. 
            'father_name' => $this->string(60)->notNull(), 
            'phone_no' => $this->string(15)->notNull(),
            'cnic' => $this->string(20)->unique()->notNull(),
            'date_of_birth' => $this->date()->notNull(),
            'caste' => $this->string(50),
            'education' => $this->string(100),
            'disability' => $this->string(100),
            'marital_status' => $this->string(20),
            'is_divorced' => $this->boolean()->defaultValue(false),
            'is_widower' => $this->boolean()->defaultValue(false),
            'is_widow' => $this->boolean()->defaultValue(false),
            'passport_no' => $this->string(20)->unique(), 
            'temporary_address' => $this->string(255),
            'permanent_address' => $this->string(255),
            'iiojk_address' => $this->string(255), 
            'status' => $this->string(20)->defaultValue('draft'),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'), 
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
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

