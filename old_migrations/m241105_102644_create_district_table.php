<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%district}}`.
 */
class m241105_102644_create_district_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%district}}', [
            'id' => $this->primaryKey()->unsigned(), 
            'name' => $this->string(255)->notNull(),
        ]);

        $columns = ['name'];

        $districts = [
            [
               'Muzaffarabad'               
            ],
            [
               'Hattian Bala'               
            ],
            [
               'Neelum Valley'               
            ],
            [
               'Mirpur'               
            ],
            [
               'Bhimber'               
            ],
            [
                'Kotli'               
            ],
            [
                'Poonch'               
            ],
            [
                'Bagh'               
            ],
            [
                'Haveli'               
            ],
            [
                'Sudanouti'               
            ]
        ];

        $this->batchInsert('district',$columns,$districts);

    }

    /**
     * {@inheritdoc}
     */
}