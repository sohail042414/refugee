<?php 

namespace app\helpers;

class AppHelper
{
    /**
     * returns list of possible marital statuses
     */

    public static function maritalStatusList()
    {
        return [
            'unmarried' => 'Unmarried',
            'married' => 'Married',
        ];
    }


    public static function getResidentTypes(){
        return [
            'local' => 'Local',
            'migrant' => 'Migrant'
        ];
    }

    public static function genderList(){
        return [
            'male' => 'Male',
            'female' => 'Female'
        ];
    }
}