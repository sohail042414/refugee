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

    public static function getRelationsList(){
        return [
            'brother' => 'Brother',
            'sister' => 'Sister',
            'mother' => 'Mother',
            'father' => 'Father'
        ];
    }

    public static function getLivingStatusList(){
        return [
            'alive' => 'Alive',
            'dead' => 'Dead',
        ];
    }
}