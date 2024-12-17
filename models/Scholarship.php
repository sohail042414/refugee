<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scholarship".
 *
 * @property int $id
 * @property int $refugee_id
 * @property string $details
 * @property string $head_of_family
 * @property string $student_name
 * @property string $scholarship
 * @property string $p_type
 * @property string|null $self
 * @property string $institution
 * @property int $year
 */
class Scholarship extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scholarship';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_id', 'details', 'head_of_family', 'student_name', 'scholarship', 'p_type', 'institution', 'year'], 'required'],
            [['refugee_id', 'year'], 'integer'],
            [['details'], 'string'],
            [['head_of_family', 'student_name', 'scholarship', 'p_type', 'self', 'institution'], 'string', 'max' => 255],
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
            'details' => 'Details',
            'head_of_family' => 'Head Of Family',
            'student_name' => 'Student Name',
            'scholarship' => 'Scholarship',
            'p_type' => 'P Type',
            'self' => 'Self',
            'institution' => 'Institution',
            'year' => 'Year',
        ];
    }
}
