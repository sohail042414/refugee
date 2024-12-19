<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "economy".
 *
 * @property int $id
 * @property string $refugee_number
 * @property int $refugee_id
 * @property float $monthly_income
 * @property float|null $subsistence_allowance
 * @property float|null $da
 * @property float|null $requested_financial_assistance
 * @property float $total_monthly_income
 */
class Economy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'economy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'refugee_id', 'monthly_income', 'total_monthly_income'], 'required'],
            [['refugee_id'], 'integer'],
            [['monthly_income', 'refugee_number', 'subsistence_allowance', 'da', 'requested_financial_assistance', 'total_monthly_income'], 'number'],
            [['refugee_number'], 'string', 'max' => 30],
            [['refugee_number'], 'unique'],
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
            'monthly_income' => 'Monthly Income',
            'subsistence_allowance' => 'Subsistence Allowance',
            'da' => 'Da',
            'requested_financial_assistance' => 'Requested Financial Assistance',
            'total_monthly_income' => 'Total Monthly Income',
        ];
    }
}
