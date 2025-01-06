<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class SearchForeignTravel extends Model
{
    public $id;
    public $refugee_number;
    public $full_name;
    public $refugee_id;
    public $details;
    public $personal_private;
    public $wife;
    public $children;
    public $passport_number;
    public $country_name;
    public $purpose_of_travel;
    public $date_of_departure;
    public $date_of_return;
    public $occupation_abroad;
    public $income;

    public function rules()
    {
        return [
            [['id', 'refugee_id'], 'integer'],
            [['refugee_number', 'full_name', 'details', 'personal_private', 'wife', 'children', 'passport_number', 'country_name', 'purpose_of_travel', 'date_of_departure', 'date_of_return', 'occupation_abroad'], 'safe'],
            [['income'], 'number'],
        ];
    }

    public function search($params)
    {
        $query = ForeignTravel::find()->joinWith('refugee'); 

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
            ->andFilterWhere(['like', 'refugee.full_name', $this->full_name])
            ->andFilterWhere(['like', 'details', $this->details])
            ->andFilterWhere(['like', 'personal_private', $this->personal_private])
            ->andFilterWhere(['like', 'wife', $this->wife])
            ->andFilterWhere(['like', 'children', $this->children])
            ->andFilterWhere(['like', 'passport_number', $this->passport_number])
            ->andFilterWhere(['like', 'country_name', $this->country_name])
            ->andFilterWhere(['like', 'purpose_of_travel', $this->purpose_of_travel])
            ->andFilterWhere(['like', 'occupation_abroad', $this->occupation_abroad])
            ->andFilterWhere(['income' => $this->income])
            ->andFilterWhere(['>=', 'date_of_departure', $this->date_of_departure])
            ->andFilterWhere(['<=', 'date_of_return', $this->date_of_return]);

        return $dataProvider;
    }
}