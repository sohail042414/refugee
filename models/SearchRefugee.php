<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Refugee;

/**
 * SearchRefugee represents the model behind the search form of `app\models\Refugee`.
 */
class SearchRefugee extends Refugee
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_women_guardian'], 'integer'],
            [['name', 'father_guardian', 'birth_date', 'cnic', 'refugee_number', 'phone_no', 'education', 'caste', 'disability', 'marital_status', 'passport_no', 'temporary_address', 'permanent_address', 'iiojk_address'], 'safe'],
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
        $query = Refugee::find();

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
            'birth_date' => $this->birth_date,
            'is_women_guardian' => $this->is_women_guardian,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'father_guardian', $this->father_guardian])
            ->andFilterWhere(['like', 'cnic', $this->cnic])
            ->andFilterWhere(['like', 'refugee_number', $this->refugee_number])
            ->andFilterWhere(['like', 'phone_no', $this->phone_no])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'caste', $this->caste])
            ->andFilterWhere(['like', 'disability', $this->disability])
            ->andFilterWhere(['like', 'marital_status', $this->marital_status])
            ->andFilterWhere(['like', 'passport_no', $this->passport_no])
            ->andFilterWhere(['like', 'temporary_address', $this->temporary_address])
            ->andFilterWhere(['like', 'permanent_address', $this->permanent_address])
            ->andFilterWhere(['like', 'iiojk_address', $this->iiojk_address]);

        return $dataProvider;
    }
}
