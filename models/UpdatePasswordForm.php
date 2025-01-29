<?php


namespace app\models;

use yii\base\Model;

class UpdatePasswordForm extends Model
{
    public $current_password;
    public $new_password;
    public $confirm_password;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['current_password', 'new_password', 'confirm_password'], 'required'],
            ['current_password', 'validateCurrentPassword'],
            ['confirm_password', 'compare', 'compareAttribute' => 'new_password', 'message' => 'Passwords do not match.'],
        ];
    }

    /**
     * Validates the current password.
     */
    public function validateCurrentPassword($attribute, $params)
    {
        $user = \Yii::$app->user->identity;



        if (!$user) {
            $this->addError($attribute, 'User is not authenticated');
            return;

        }

        if (!$this->current_password) {
            $this->addError($attribute, 'password is missing.');
            return;
        }

        if (!\Yii::$app->security->validatePassword($this->current_password, $user->password_hash)) {
            $this->addError($attribute, 'Current password is incorrect.');
        }
    }
}




?>