<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spouse".
 *
 * @property int $id
 * @property string $wife_first_name
 * @property string $wife_second_name
 * @property string $cnic
 * @property string $refugee_number
 * @property string $date_of_nikah
 * @property string $local_or_migrant
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
            [['wife_first_name', 'wife_second_name', 'cnic', 'refugee_number', 'date_of_nikah', 'local_or_migrant'], 'required'],
            [['date_of_nikah', 'created_at', 'updated_at'], 'safe'],
            [['wife_first_name', 'wife_second_name'], 'string', 'max' => 60],
            [['cnic', 'local_or_migrant'], 'string', 'max' => 20],
            [['refugee_number'], 'string', 'max' => 30],
            [['cnic'], 'unique'],
            [['refugee_number'], 'exist', 'skipOnError' => true, 'targetClass' => Refugee::class, 'targetAttribute' => ['refugee_number' => 'refugee_number']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wife_first_name' => 'Wife First Name',
            'wife_second_name' => 'Wife Second Name',
            'cnic' => 'Cnic',
            'refugee_number' => 'Refugee Number',
            'date_of_nikah' => 'Date Of Nikah',
            'local_or_migrant' => 'Local Or Migrant',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[RefugeeNumber]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRefugeeNumber()
    {
        return $this->hasOne(Refugee::class, ['refugee_number' => 'refugee_number']);
    }
}
