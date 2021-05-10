<?php

    namespace app\models;

    use yii\db\ActiveRecord;



    class Department extends ActiveRecord
    {
        

        public static function tableName()
        {
            return 'department';
        }

        public function getSpeciality()
        {
            return $this -> hasMany(Speciality::className(), ['Department_id' => 'id']);
        }

        public function getFaculty()
        {
            return $this -> hasOne(Faculty::className(), ['id' => 'Faculty_id']);
        }


    }
    