<?php

use yii\db\Migration;

/**
 * Class m241206_110552_populate_users
 */
class m241206_110552_populate_users extends Migration
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
            'phone' => '03135285266',
            'user_type' => 'super',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('Pass@1234'),
            'password_reset_token' => null,
        ];

        $this->insert('users',$userData);

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
