<?php

    namespace app\models;

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

        public $count;

        public static function tableName()
        {
            return 'student';
        }

        public function getGrouppp()
        {
            return $this -> hasOne(Grouppp::className(), ['id' => 'Group_id']);
        }

        public function rules()
        {
            return [
                ['group', 'integer']
            ];
        }
    }
    