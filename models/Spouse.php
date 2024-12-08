<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spouse".
 *
 * @property int $id
 * @property string $full_name
 * @property string $cnic
 * @property string $refugee_number
 * @property string $date_of_nikah
 * @property string $resident_type
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Refugee $refugeeNumber
 */
class Spouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spouse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'cnic', 'refugee_number', 'date_of_nikah', 'resident_type'], 'required'],
            [['date_of_nikah', 'created_at', 'updated_at'], 'safe'],
            [['full_name'], 'string', 'max' => 60],
            [['cnic', 'resident_type'], 'string', 'max' => 20],
            [['refugee_number'], 'string', 'max' => 30],
            [['cnic'], 'unique'],
            //[['refugee_number'], 'exist', 'skipOnError' => true, 'targetClass' => Refugee::class, 'targetAttribute' => ['refugee_number' => 'refugee_number']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'cnic' => 'CNIC',
            'refugee_number' => 'Refugee Number',
            'date_of_nikah' => 'Date Of Nikah',
            'resident_type' => 'Resident Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[RefugeeNumber]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRefugee()
    {
        return $this->hasOne(Refugee::class, ['id' => 'refugee_id']);
    }
}
