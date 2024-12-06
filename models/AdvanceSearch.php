<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class AdvanceSearch extends Model
{
    public $refugee_number;
    public $name;
    public $father_guardian;
    public $cnic;
    public $birth_date;
    public $phone_no;
    public $education;
    public $caste;
    public $disability;
    public $marital_status;
    public $passport_no;
    public $is_women_guardian;
    public $temporary_address;
    public $permanent_address;
    public $iiojk_address;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['refugee_number', 'refugee_name','father_gaurdian','cnic_number','phone_no','education','caste','disability','marital_status','passport_no','is_women_guardian','temporary_address','permanent_address'], 'safe'],
            ['birth_date', 'date'],
        ];
    }


}
