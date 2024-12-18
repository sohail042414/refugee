<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "job".
 *
 * @property int $id
 * @property string $job_type
 * @property int $refugee_id
 * @property string $relation
 * @property string $other_details
 * @property string $department
 * @property string $date_of_employment
 * @property string $designation
 * @property int $grade
 * @property float $salary
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_type', 'refugee_id', 'relation', 'other_details', 'department', 'date_of_employment', 'designation', 'grade', 'salary'], 'required'],
            [['job_type', 'relation'], 'string'],
            [['refugee_id', 'grade'], 'integer'],
            [['date_of_employment'], 'safe'],
            [['salary'], 'number'],
            [['other_details'], 'string', 'max' => 50],
            [['department', 'designation'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job_type' => 'Job Type',
            'refugee_id' => 'Refugee ID',
            'relation' => 'Relation',
            'other_details' => 'Other Details',
            'department' => 'Department',
            'date_of_employment' => 'Date Of Employment',
            'designation' => 'Designation',
            'grade' => 'Grade',
            'salary' => 'Salary',
        ];
    }
}
