<?php

    namespace app\models;

    use Yii;
    use yii\db\ActiveRecord;



    class Exams extends ActiveRecord
    {
        public $grous;
        public $subbj;
        public $semes;

        public static function tableName()
        {
            return 'exams';
        }

        public function getLecturer()
        {
            return $this -> hasOne(Lecturer::className(), ['id' => 'Lexturer_id']);
        }

        public function getGrouppp()
        {
            return $this -> hasOne(Grouppp::className(), ['id' => 'Group_id']);
        }

        public function getExammarks()
        {
            return $this -> hasMany(Exammarks::className(), ['Exam_id' => 'id']);
        }

        public function getSubject()
        {
            return $this -> hasOne(Subject::className(), ['id' => 'Subject_id']);
        }

        public function rules()
        {
            return [ 
                ['semes', 'required'],
                ['semes', 'number', max => 8, min => 1],
            ];
        }
    }
