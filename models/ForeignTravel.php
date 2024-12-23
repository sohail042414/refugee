<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foreign_travel".
 *
 * @property int $id
 * @property string $refugee_number
 * @property int $refugee_id
 * @property string $details
 * @property string $personal_private
 * @property string|null $wife
 * @property string|null $children
 * @property string $passport_number
 * @property string $country_name
 * @property string $purpose_of_travel
 * @property string $date_of_departure
 * @property string|null $date_of_return
 * @property string|null $occupation_abroad
 * @property float|null $income
 */
class ForeignTravel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foreign_travel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_number', 'refugee_id', 'details', 'personal_private', 'passport_number', 'country_name', 'purpose_of_travel', 'date_of_departure'], 'required'],
            [['refugee_id'], 'integer'],
            [['details'], 'string'],
            [['date_of_departure', 'date_of_return'], 'safe'],
            [['income'], 'number'],
            [['refugee_number'], 'string', 'max' => 30],
            [['personal_private', 'wife', 'children', 'country_name', 'purpose_of_travel', 'occupation_abroad'], 'string', 'max' => 255],
            [['passport_number'], 'string', 'max' => 50],
            [['refugee_number'], 'unique'],
            [['passport_number'], 'unique'],
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
            'personal_private' => 'Personal Private',
            'wife' => 'Wife',
            'children' => 'Children',
            'passport_number' => 'Passport Number',
            'country_name' => 'Country Name',
            'purpose_of_travel' => 'Purpose Of Travel',
            'date_of_departure' => 'Date Of Departure',
            'date_of_return' => 'Date Of Return',
            'occupation_abroad' => 'Occupation Abroad',
            'income' => 'Income',
        ];
    }
}
