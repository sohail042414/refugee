<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "children_kashmir_education".
 *
 * @property int $id
 * @property int $refugee_id
 * @property string $full_name
 * @property int $year
 * @property string $current_information
 * @property string $job
 * @property string $college
 */
class ChildrenKashmirEducation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'children_kashmir_education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['refugee_id', 'full_name', 'year', 'current_information', 'job', 'college'], 'required'],
            [['refugee_id', 'year'], 'integer'],
            [['full_name', 'current_information', 'job', 'college'], 'string', 'max' => 255],
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
            'full_name' => 'Full Name',
            'year' => 'Year',
            'current_information' => 'Current Information',
            'job' => 'Job',
            'college' => 'College',
        ];
    }
}
