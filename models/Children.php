<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "children".
 *
 * @property int $id
 * @property string $name
 * @property string $date_of_birth
 * @property string $education
 * @property string|null $educational_institution_year
 * @property string|null $occupation
 * @property string|null $disability
 * @property string $refugee_number
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Refugee $refugeeNumber
 */
class Children extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'children';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date_of_birth', 'education', 'refugee_number'], 'required'],
            [['date_of_birth', 'created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 60],
            [['education', 'occupation', 'disability'], 'string', 'max' => 100],
            [['educational_institution_year'], 'string', 'max' => 150],
            [['refugee_number'], 'string', 'max' => 30],
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
            'name' => 'Name',
            'date_of_birth' => 'Date Of Birth',
            'education' => 'Education',
            'educational_institution_year' => 'Educational Institution Year',
            'occupation' => 'Occupation',
            'disability' => 'Disability',
            'refugee_number' => 'Refugee Number',
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
