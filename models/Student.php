<?php

    namespace app\models;

    use yii\db\ActiveRecord;



    class Student extends ActiveRecord
    {
        public $count;

        public static function tableName()
        {
            return 'student';
        }

        public function getGrouppp()
        {
            return $this -> hasOne(Grouppp::className(), ['id' => 'Group_id']);
        }


    }
    