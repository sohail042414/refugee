<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "business".
 *
 * @property int $id
 * @property int $refugee_id
 * @property string $business_details
 * @property string $relation
 * @property string|null $other_details
 * @property int $clinic
 * @property int $labor
 * @property int $shop
 * @property string $from_date
 * @property float $monthly_income
 */
class Business extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'business';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_id', 'business_details', 'relation', 'from_date', 'monthly_income'], 'required'],
            [['refugee_id', 'clinic', 'labor', 'shop'], 'integer'],
            [['relation'], 'string'],
            [['from_date'], 'safe'],
            [['monthly_income'], 'number'],
            [['business_details'], 'string', 'max' => 255],
            [['other_details'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'refugee_id' => 'Refugee ID',
            'business_details' => 'Business Details',
            'relation' => 'Relation',
            'other_details' => 'Other Details',
            'clinic' => 'Clinic',
            'labor' => 'Labor',
            'shop' => 'Shop',
            'from_date' => 'From Date',
            'monthly_income' => 'Monthly Income',
        ];
    }
}
