<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * AdvanceSearch is the model behind the advanced search form.
 */
class AdvanceSearch extends Model
{
    public $refugee_number;
    public $full_name;
    public $father_name;
    public $cnic;
    public $phone_no;
    public $education;
    public $caste;
    public $disability;
    public $marital_status;
    public $passport_no;
    public $temporary_address;
    public $permanent_address;
    public $iiojk_address;
    public $police_case;
    public $travelled_iijok;
    public $guest_from_iijok;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['refugee_number', 'full_name', 'father_name', 'cnic', 'phone_no', 'education', 'caste', 'disability', 'marital_status', 'passport_no', 'temporary_address', 'permanent_address', 'iiojk_address'], 'safe'],
            [['police_case', 'travelled_iijok', 'guest_from_iijok'], 'boolean'],
        ];
    }

    /**
     * Creates a data provider instance with search query applied.
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Refugee::find()->with(['policeCase', 'foreignTravel', 'iijokGuest']); 
    
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
    
        $this->load($params);
    
        if (!$this->validate()) {
            return $dataProvider;
        }
        
        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'cnic', $this->cnic])
            ->andFilterWhere(['like', 'phone_no', $this->phone_no])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'caste', $this->caste])
            ->andFilterWhere(['like', 'disability', $this->disability])
            ->andFilterWhere(['like', 'marital_status', $this->marital_status])
            ->andFilterWhere(['like', 'passport_no', $this->passport_no])
            ->andFilterWhere(['like', 'temporary_address', $this->temporary_address])
            ->andFilterWhere(['like', 'permanent_address', $this->permanent_address])
            ->andFilterWhere(['like', 'iiojk_address', $this->iiojk_address]);
    
        $conditions = ['or']; 
    
        if ($this->police_case) {
            $query->joinWith('policeCase'); 
            $conditions[] = ['not', ['police_case.id' => null]];
        }
        if ($this->travelled_iijok) {
            $query->joinWith('foreignTravel'); 
            $conditions[] = ['not', ['foreign_travel.id' => null]]; 
        }
        if ($this->guest_from_iijok) {
            $query->joinWith('iijokGuest'); 
            $conditions[] = ['not', ['iijok_guest.id' => null]]; 
        }
    
        if (count($conditions) > 1) { 
            $query->andWhere($conditions);
        }
    
        return $dataProvider;
    }
    
    
}