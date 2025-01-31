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

    
    public static function getJobRelationsList(){
        return [
            'self' => 'Self',
            'son' => 'Son',
            'daughter' => 'Daughter',
            'wife' => 'Wife',
            'daughter_in_law' => 'Daughter-In-Law',
            'other' => 'Other'
        ];
    }

    
    public static function getInLawRelationsList(){
        return [
            'father-in-law' => 'Father-In-Law',
            'mother-In-Law' => 'Mother-In-Law',
        ];
    }

    public static function getBusinessRelationsList(){
        return [
            'self' => 'Self',
            'son' => 'Son',
            'daughter' => 'Daughter',
            'wife' => 'Wife',
            'daughter_in_law' => 'Daughter-In-Law',
            'other' => 'Other'
        ];
    }
    public static function getIijokGuestRelationsList(){
        return [
            'guest' => 'Guest',
            'relative' => 'Relative',
            'visit' => 'Visit'
        ];
    }

    public static function getLivingStatusList(){
        return [
            'alive' => 'Alive',
            'dead' => 'Dead',
        ];
    }

    public static function getJobTypeList(){
        return [
            'govt' => 'Government',
            'public' => 'Public',
            'private' => 'Private',
        ];
    }

    public static function getIijokGuestTypeList(){
        return [
            'To IIJOK' => 'To IIJOK',
            'From IIJOK' => 'From IIJOK'
        ];
    }

    

    
}