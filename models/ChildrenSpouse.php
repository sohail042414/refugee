<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "children_spouse".
 *
 * @property int $id
 * @property int|null $refugee_id
 * @property string $refugee_number
 * @property string $full_name
 * @property string|null $spouse_name
 * @property string|null $date_of_birth
 * @property string|null $date_of_nikah
 * @property string|null $education
 * @property string|null $institute
 * @property string|null $passing_year
 * @property string|null $occupation
 * @property string $resident_type
 * @property string|null $children_details
 * @property string|null $disability
 */
class ChildrenSpouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'children_spouse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_id'], 'integer'],
            [['refugee_number', 'full_name', 'resident_type'], 'required'],
            [['date_of_birth', 'date_of_nikah'], 'safe'],
            [['resident_type', 'children_details'], 'string'],
            [['refugee_number'], 'string', 'max' => 30],
            [['full_name', 'spouse_name'], 'string', 'max' => 100],
            [['education', 'institute', 'passing_year', 'occupation', 'disability'], 'string', 'max' => 255],
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
            'full_name' => 'Full Name',
            'spouse_name' => 'Spouse Name',
            'date_of_birth' => 'Date Of Birth',
            'date_of_nikah' => 'Date Of Nikah',
            'education' => 'Education',
            'institute' => 'Institute',
            'passing_year' => 'Passing Year',
            'occupation' => 'Occupation',
            'resident_type' => 'Resident Type',
            'children_details' => 'Children Details',
            'disability' => 'Disability',
        ];
    }
}
