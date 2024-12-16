<?php

use yii\db\Migration;

/**
 * Class m241216_090627_populate_user
 */
class m241216_090627_populate_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $userData = [
            'full_name' => 'Super User',
            'username' => 'super_user',
            'email' => 'super@gmail.com',
            'phone' => '031334343433',
            'user_type' => 'super',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('Pass@1234'),
            'password_reset_token' => null,
        ];

        $this->insert('user',$userData);

        $userData = [
            'full_name' => 'Date User 1',
            'username' => 'data_user1',
            'email' => 'data@gmail.com',
            'phone' => '0313234234234',
            'user_type' => 'user',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('user1234'),
            'password_reset_token' => null,
        ];

        $this->insert('user',$userData);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241206_110552_populate_users cannot be reverted.\n";

        return false;
    }

}
