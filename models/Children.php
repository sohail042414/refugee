<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "children".
 *
 * @property int $id
 * @property string $full_name
 * @property string $date_of_birth
 * @property string $education
 * @property string|null $institute
 * @property string|null $passing_year
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
            [['full_name', 'date_of_birth', 'education'], 'required'],
            [['passing_year'], 'string', 'max' => 4],
            [['education'], 'string', 'max' => 40],
            [['date_of_birth', 'created_at', 'updated_at'], 'safe'],
            [['full_name'], 'string', 'max' => 60],
            [['occupation', 'disability'], 'string', 'max' => 100],
            [['institute'], 'string', 'max' => 60],
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
            'full_name' => 'Full Name',
            'date_of_birth' => 'Date Of Birth',
            'education' => 'Education',
            'institute' => 'Institute',
            'passing_year' => 'Passing Year',
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
    public function getRefugee()
    {
        return $this->hasOne(Refugee::class, ['id' => 'refugee_id']);
    }
}
