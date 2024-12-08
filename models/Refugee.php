<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "refugee".
 *
 * @property int $id
 * @property string $name
 * @property string $father_guardian
 * @property string $birth_date
 * @property string $cnic
 * @property string $refugee_number
 * @property string $phone_no
 * @property string|null $education
 * @property string|null $caste
 * @property string|null $disability
 * @property string|null $marital_status
 * @property int|null $is_women_guardian
 * @property string|null $passport_no
 * @property string|null $temporary_address
 * @property string|null $permanent_address
 * @property string|null $iiojk_address
 *
 * @property Children[] $children
 */
class Refugee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'refugee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'father_guardian', 'birth_date', 'cnic', 'refugee_number', 'phone_no'], 'required'],
            [['birth_date'], 'safe'],
            [['is_women_guardian'], 'in', 'range' => [0, 1, null], 'message' => 'Invalid value for women guardian status.'],
            [['name', 'father_guardian'], 'string', 'max' => 60],
            [['cnic', 'marital_status', 'passport_no'], 'string', 'max' => 20],
            [['refugee_number'], 'string', 'max' => 30],
            [['phone_no'], 'string', 'max' => 15],
            [['education', 'disability'], 'string', 'max' => 100],
            [['caste'], 'string', 'max' => 50],
            [['temporary_address', 'permanent_address', 'iiojk_address'], 'string', 'max' => 255],
            [['cnic'], 'unique'],
            [['refugee_number'], 'unique'],
            [['passport_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'father_guardian' => 'Father Guardian',
            'date_of_birth' => 'Date of Birth',
            'cnic' => 'CNIC',
            'refugee_number' => 'Refugee Number',
            'phone_no' => 'Phone No',
            'education' => 'Education',
            'caste' => 'Caste',
            'disability' => 'Disability',
            'marital_status' => 'Marital Status',
            'is_women_guardian' => 'Women Guardian Status', 
            'passport_no' => 'Passport No',
            'temporary_address' => 'Temporary Address',
            'permanent_address' => 'Permanent Address',
            'iiojk_address' => 'Iiojk Address',
        ];
    }

    /**
     * Gets related Children records
     *
     * @return \yii\db\ActiveQuery
     */
        public function getChildren()
    {
        return $this->hasMany(Children::class, ['refugee_number' => 'refugee_number']);
    }

    /**
     * Gets related Children records
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpouses()
    {
        return $this->hasMany(Children::class, ['refugee_number' => 'refugee_number']);
    }


}
