<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rental_house".
 *
 * @property int $id
 * @property string $refugee_number
 * @property int $refugee_id
 * @property string $house_owner_name
 * @property string $address
 * @property float $monthly_rent
 * @property string $phone_number
 */
class RentalHouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rental_house';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_number', 'refugee_id', 'house_owner_name', 'address', 'monthly_rent', 'phone_number'], 'required'],
            [['refugee_id'], 'integer'],
            [['address'], 'string'],
            [['monthly_rent'], 'number'],
            [['refugee_number'], 'string', 'max' => 30],
            [['house_owner_name'], 'string', 'max' => 255],
            [['phone_number'], 'string', 'max' => 15],
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
            'house_owner_name' => 'House Owner Name',
            'address' => 'Address',
            'monthly_rent' => 'Monthly Rent',
            'phone_number' => 'Phone Number',
        ];
    }
}
