<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inlaw".
 *
 * @property int $id
 * @property string $refugee_number
 * @property int $refugee_id
 * @property string $relation
 * @property string $name
 * @property string $living_status
 * @property string|null $cnic
 * @property string|null $current_address
 * @property string|null $burial_address
 * @property string|null $occupation
 * @property string|null $phone_number
 */
class Inlaw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inlaw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_number', 'refugee_id', 'relation', 'name'], 'required'],
            [['refugee_id'], 'integer'],
            [['relation', 'living_status'], 'string'],
            [['refugee_number'], 'string', 'max' => 50],
            [['name', 'current_address', 'burial_address', 'occupation'], 'string', 'max' => 255],
            [['cnic', 'phone_number'], 'string', 'max' => 15],
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
            'relation' => 'Relation',
            'name' => 'Name',
            'living_status' => 'Living Status',
            'cnic' => 'Cnic',
            'current_address' => 'Current Address',
            'burial_address' => 'Burial Address',
            'occupation' => 'Occupation',
            'phone_number' => 'Phone Number',
        ];
    }
}
