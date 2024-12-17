<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "refugee".
 *
 * @property int $id
 * @property string $name
 * @property string $father_name
 * @property string $date_of_birth
 * @property string $cnic
 * @property string $refugee_number
 * @property string $phone_no
 * @property string|null $education
 * @property string|null $caste
 * @property string|null $disability
 * @property string|null $marital_status
 * @property string|null $gender
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
            [['camp_id','full_name', 'father_name', 'date_of_birth', 'cnic', 'refugee_number', 'phone_no','marital_status'], 'required'],
            [['date_of_birth'], 'safe'],
            [['gender'], 'string'],
            [['full_name', 'father_name'], 'string', 'max' => 60],
            [['cnic', 'marital_status', 'passport_no'], 'string', 'max' => 20],
            [['refugee_number'], 'string', 'max' => 30],
            [['phone_no'], 'string', 'max' => 15],
            [['education', 'disability'], 'string', 'max' => 100],
            [['caste'], 'string', 'max' => 50],
            [['temporary_address', 'permanent_address', 'iiojk_address'], 'string', 'max' => 255],
            [['cnic'], 'unique'],
            [['refugee_number'], 'unique'],
            [['passport_no'], 'unique'],
            [['is_divorced','is_widow','is_widower','camp_id'],'integer']
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
            'father_name' => 'Father Name',
            'date_of_birth' => 'Date of Birth',
            'cnic' => 'CNIC',
            'refugee_number' => 'Refugee Number',
            'phone_no' => 'Phone No',
            'education' => 'Education',
            'caste' => 'Caste',
            'disability' => 'Disability',
            'marital_status' => 'Marital Status',
            'gender' => 'Gender', 
            'passport_no' => 'Passport No',
            'temporary_address' => 'Temporary Address',
            'permanent_address' => 'Permanent Address',
            'iiojk_address' => 'Iiojk Address',
        ];
    }

    /**
     * Gets query for [[refugee_id]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCamp()
    {
        return $this->hasOne(Camp::class, ['id' => 'camp_id']);
    }

    /**
     * Gets related Children records
     *
     * @return \yii\db\ActiveQuery
     */
        public function getChildren()
    {
        return $this->hasMany(Children::class, ['refugee_id' => 'id']);
    }

    /**
     * Gets related Children records
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpouses()
    {
        return $this->hasMany(Spouse::class, ['refugee_id' => 'id']);
    }

    public function getChildrenMarried()
    {
        return $this->hasMany(ChildrenMarried::class, ['refugee_id' => 'id']);
    }

    public function getFamilyMember()
    {
        return $this->hasMany(FamilyMember::class, ['refugee_id' => 'id']);
    }
    
    public function getInlaw()
    {
        return $this->hasMany(Inlaw::class, ['refugee_id' => 'id']);
    }

    public function getScholarship()
    {
        return $this->hasMany(Scholarship::class, ['refugee_id' => 'id']);
    }

    public function getChildrenKashmirEducation()
    {
        return $this->hasMany(ChildrenKashmirEducation::class, ['refugee_id' => 'id']);
    }

}
