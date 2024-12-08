<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%camps}}` and adds foreign key to `district`.
 */
class m241105_103733_create_camp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%camp}}', [
            'id' => $this->primaryKey(),
            'district_id' => $this->integer()->unsigned()->notNull(), 
            'name' => $this->string(60)->notNull(),
            'address' => $this->string(255)->notNull(),
        ]);

        // $this->addForeignKey(
        //     'fk-camps-district_id',      
        //     '{{%camps}}',                 
        //     'district_id',                
        //     '{{%district}}',             
        //     'id',                         
        //     'CASCADE',                   
        //     'CASCADE'                     
        // );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->dropForeignKey(
        //     'fk-camps-district_id',
        //     '{{%camps}}'
        // );

        $this->dropTable('{{%camp}}');
    }
}


