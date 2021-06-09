<?php

    namespace app\models;

    use Yii;
    use yii\db\ActiveRecord;



    class Student extends ActiveRecord
    {
        public $group;
        public $faculty;
        public $firstName;
        public $lastName;
        public $gender;
        public $birthDate;
        public $childs;
        public $stipend;
        public $stip;

        public $count;

        public static function tableName()
        {
            return 'student';
        }

        public function getGrouppp()
        {
            return $this -> hasOne(Grouppp::className(), ['id' => 'Group_id']);
        }

        public function getExammarks()
        {
            return $this -> hasMany(Exammarks::className(), ['Student_id' => 'id']);
        }
        
        public function getThesiswork()
        {
            return $this -> hasOne(Thesiswork::className(), ['Student_id' => 'id']);
        }



    }
    