<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "police_case".
 *
 * @property int $id
 * @property string $refugee_number
 * @property int $refugee_id
 * @property string $details
 * @property string $FIR
 * @property string $crime
 * @property float|null $bail
 * @property string $date_of_arrest
 * @property string|null $date_of_release
 */
class PoliceCase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'police_case';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_number', 'refugee_id', 'details', 'FIR', 'crime', 'date_of_arrest'], 'required'],
            [['refugee_id'], 'integer'],
            [['details'], 'string'],
            [['bail'], 'number'],
            [['date_of_arrest', 'date_of_release'], 'safe'],
            [['refugee_number'], 'string', 'max' => 30],
            [['FIR', 'crime'], 'string', 'max' => 255],
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
            'details' => 'Details',
            'FIR' => 'Fir',
            'crime' => 'Crime',
            'bail' => 'Bail',
            'date_of_arrest' => 'Date Of Arrest',
            'date_of_release' => 'Date Of Release',
        ];
    }
}
