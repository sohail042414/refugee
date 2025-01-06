<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class SearchIijokGuest extends Model
{
    public $id;
    public $refugee_number;
    public $refugee_id;
    public $type;
    public $details;
    public $full_name;
    public $relation;
    public $date_of_arrival;
    public $date_of_return;
    public $purpose_of_arrival;
    public $date_of_departure;
    public $purpose_of_departure;

    public function rules()
    {
        return [
            [['id', 'refugee_id'], 'integer'],
            [['refugee_number', 'type', 'details', 'full_name', 'relation', 'purpose_of_arrival', 'purpose_of_departure', 'date_of_arrival', 'date_of_return', 'date_of_departure'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = IijokGuest::find()->joinWith('refugee'); 

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 10],
        ]);

        $dataProvider->sort->attributes['refugee_number'] = [
            'asc' => ['refugee.refugee_number' => SORT_ASC],
            'desc' => ['refugee.refugee_number' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['full_name'] = [
            'asc' => ['refugee.full_name' => SORT_ASC],
            'desc' => ['refugee.full_name' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['id' => $this->id])
            ->andFilterWhere(['refugee_id' => $this->refugee_id])
            ->andFilterWhere(['like', 'refugee_number', $this->refugee_number])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'details', $this->details])
            ->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'relation', $this->relation])
            ->andFilterWhere(['like', 'purpose_of_arrival', $this->purpose_of_arrival])
            ->andFilterWhere(['like', 'purpose_of_departure', $this->purpose_of_departure])
            ->andFilterWhere(['>=', 'date_of_arrival', $this->date_of_arrival])
            ->andFilterWhere(['<=', 'date_of_return', $this->date_of_return])
            ->andFilterWhere(['<=', 'date_of_departure', $this->date_of_departure]);

        return $dataProvider;
    }
}