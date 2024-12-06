<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Spouse;

/**
 * SearchSpouse represents the model behind the search form of `app\models\Spouse`.
 */
class SearchSpouse extends Spouse
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['wife_first_name', 'wife_second_name', 'cnic', 'refugee_number', 'date_of_nikah', 'local_or_migrant', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Spouse::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_of_nikah' => $this->date_of_nikah,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'wife_first_name', $this->wife_first_name])
            ->andFilterWhere(['like', 'wife_second_name', $this->wife_second_name])
            ->andFilterWhere(['like', 'cnic', $this->cnic])
            ->andFilterWhere(['like', 'refugee_number', $this->refugee_number])
            ->andFilterWhere(['like', 'local_or_migrant', $this->local_or_migrant]);

        return $dataProvider;
    }
}
