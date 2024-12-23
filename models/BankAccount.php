<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_account".
 *
 * @property int $id
 * @property string $refugee_number
 * @property int $refugee_id
 * @property string $details
 * @property string $head_of_family
 * @property string|null $wife
 * @property string|null $children
 * @property string $full_name
 * @property string $account_number
 * @property string $account_name
 */
class BankAccount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_number', 'refugee_id', 'details', 'head_of_family', 'full_name', 'account_number', 'account_name'], 'required'],
            [['refugee_id'], 'integer'],
            [['details'], 'string'],
            [['refugee_number'], 'string', 'max' => 30],
            [['head_of_family', 'wife', 'children', 'full_name', 'account_name'], 'string', 'max' => 255],
            [['account_number'], 'string', 'max' => 50],
            [['refugee_number'], 'unique'],
            [['account_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'refugee_number' => 'Refugee Number',
            'refugee_id' => 'Refugee ID',
            'details' => 'Details',
            'head_of_family' => 'Head Of Family',
            'wife' => 'Wife',
            'children' => 'Children',
            'full_name' => 'Full Name',
            'account_number' => 'Account Number',
            'account_name' => 'Account Name',
        ];
    }
}
