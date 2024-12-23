<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iijok_guest".
 *
 * @property int $id
 * @property string $refugee_number
 * @property int $refugee_id
 * @property string $type
 * @property string $details
 * @property string $full_name
 * @property string $relation
 * @property string $date_of_arrival
 * @property string|null $date_of_return
 * @property string $purpose_of_arrival
 * @property string|null $date_of_departure
 * @property string|null $purpose_of_departure
 */
class IijokGuest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'iijok_guest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_number', 'refugee_id', 'type', 'details', 'full_name', 'date_of_arrival', 'purpose_of_arrival'], 'required'],
            [['refugee_id'], 'integer'],
            [['type', 'details', 'relation'], 'string'],
            [['date_of_arrival', 'date_of_return', 'date_of_departure'], 'safe'],
            [['refugee_number'], 'string', 'max' => 30],
            [['full_name', 'purpose_of_arrival', 'purpose_of_departure'], 'string', 'max' => 255],
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
            'type' => 'Type',
            'details' => 'Details',
            'full_name' => 'Full Name',
            'relation' => 'Relation',
            'date_of_arrival' => 'Date Of Arrival',
            'date_of_return' => 'Date Of Return',
            'purpose_of_arrival' => 'Purpose Of Arrival',
            'date_of_departure' => 'Date Of Departure',
            'purpose_of_departure' => 'Purpose Of Departure',
        ];
    }
}
