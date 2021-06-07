<?php

    namespace app\models;

    use yii\db\ActiveRecord;



    class Grouppp extends ActiveRecord
    {
        // public $groupfind;
        // public $group;

        public static function tableName()
        {
            return 'grouppp';
        }

        public function getStudent()
        {
            return $this -> hasMany(Student::className(), ['Group_id' => 'id']);
        }

        public function getSpeciality()
        {
            return $this -> hasOne(Speciality::className(), ['id' => 'Speciality_id']);
        }

        public function getPlan()
        {
            return $this -> hasMany(Plan::className(), ['Group_id' => 'id']);
        }

        public function rules()
        {
            return [
                ['groupfind', 'string'],
                ['grow', 'required']
            ];
        }

    }
    