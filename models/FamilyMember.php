<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "family_member".
 *
 * @property int $id
 * @property int $refugee_id
 * @property string $refugee_number
 * @property string $relation
 * @property string $full_name
 * @property string $alive_deceased
 * @property string|null $cnic
 * @property string|null $current_address_or_burial
 * @property string|null $occupation
 * @property string|null $phone_number
 */
class FamilyMember extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'family_member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_id', 'refugee_number', 'relation', 'full_name', 'living_status'], 'required'],
            [['refugee_id'], 'integer'],
            [['relation', 'living_status', 'current_address', 'burial_address'], 'string'],
            [['refugee_number'], 'string', 'max' => 30],
            [['full_name'], 'string', 'max' => 100],
            [['cnic', 'phone_number'], 'string', 'max' => 15],
            [['occupation'], 'string', 'max' => 255],
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
            'refugee_number' => 'Refugee Number',
            'relation' => 'Relation',
            'full_name' => 'Full Name',
            'living_status' => 'Living Status',
            'cnic' => 'Cnic',
            'current_address' => 'Current Address',
            'burial_address' => 'Burrial Address',
            'occupation' => 'Occupation',
            'phone_number' => 'Phone Number',
        ];
    }
}
