<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class SearchPoliceCase extends Model
{
    public $id;
    public $refugee_id;
    public $refugee_number;
    public $full_name;
    public $details;
    public $FIR;
    public $crime;

    public function rules()
    {
        return [
            [['id', 'refugee_id'], 'integer'],
            [['refugee_number', 'full_name', 'details', 'FIR', 'crime'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = PoliceCase::find()->joinWith('refugee');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 10],
        ]);

        $dataProvider->sort->attributes['full_name'] = [
            'asc' => ['refugee.full_name' => SORT_ASC],
            'desc' => ['refugee.full_name' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['refugee_number'] = [
            'asc' => ['refugee.refugee_number' => SORT_ASC],
            'desc' => ['refugee.refugee_number' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['id' => $this->id])
            ->andFilterWhere(['like', 'refugee_number', $this->refugee_number])
            ->andFilterWhere(['like', 'FIR', $this->FIR])
            ->andFilterWhere(['like', 'crime', $this->crime])
            ->andFilterWhere(['like', 'details', $this->details])
            ->andFilterWhere(['like', 'refugee.full_name', $this->full_name]);

        return $dataProvider;
    }
}