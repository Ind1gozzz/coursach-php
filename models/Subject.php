<?php

    namespace app\models;

    use yii\db\ActiveRecord;



    class Subject extends ActiveRecord
    {
        public static function tableName()
        {
            return 'subject';
        }

        public function getWorkload()
        {
            return $this -> hasMany(Workload::calssName(), ['Subject_id' => 'id']);
        }

        public function getExams()
        {
            return $this -> hasMany(Exams::className(), ['Subject_id' => 'id']);
        }
    }