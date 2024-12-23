<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "property".
 *
 * @property int $id
 * @property string $refugee_number
 * @property int $refugee_id
 * @property string $detail
 * @property string $personal_private
 * @property string|null $wife
 * @property string|null $children
 * @property string|null $house
 * @property string|null $plot
 * @property string|null $jewellery
 * @property string|null $car
 * @property string|null $shop
 * @property string|null $miscellaneous
 */
class Property extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_number', 'refugee_id', 'detail', 'personal_private'], 'required'],
            [['refugee_id'], 'integer'],
            [['detail'], 'string'],
            [['refugee_number'], 'string', 'max' => 30],
            [['personal_private', 'wife', 'children', 'house', 'plot', 'jewellery', 'car', 'shop', 'miscellaneous'], 'string', 'max' => 255],
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
            'detail' => 'Detail',
            'personal_private' => 'Personal Private',
            'wife' => 'Wife',
            'children' => 'Children',
            'house' => 'House',
            'plot' => 'Plot',
            'jewellery' => 'Jewellery',
            'car' => 'Car',
            'shop' => 'Shop',
            'miscellaneous' => 'Miscellaneous',
        ];
    }
}
