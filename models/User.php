<?php 

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    //Field to get password from form. 
    public $password; 


    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['full_name', 'username', 'email', 'password_hash'], 'required'],
            [['password'], 'required', 'on' => 'create'],
            [['user_type','status'], 'string'],
            [['password'], 'string', 'min' => 6],
            [['created_at', 'updated_at'], 'safe'],
            [['full_name', 'password'], 'string', 'max' => 255],
            [['username'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 15],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isAttributeChanged('password')) {
                $this->password = Yii::$app->security->generatePasswordHash($this->password);
            }
            return true;
        }
        return false;
    }


    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }


    // IdentityInterface methods
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token, 'status' => 10]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password_hash);
    }

}


?>