<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "camp".
 *
 * @property int $id
 * @property int $district_id
 * @property string $name
 * @property string $address
 */
class Camp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'camp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['district_id', 'name', 'address'], 'required'],
            [['district_id'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'district_id' => 'District ID',
            'name' => 'Name',
            'address' => 'Address',
        ];
    }

    /**
     * Gets query for [[RefugeeNumber]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::class, ['id' => 'district_id']);
    }
}
