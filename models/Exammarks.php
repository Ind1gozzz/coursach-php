<?php

    namespace app\models;

    use Yii;
    use yii\db\ActiveRecord;



    class Exammarks extends ActiveRecord
    {
        public $grous;
        public $subbj;
        public $semes;
        public $mark;
        public $lect_id;
        public $dateStart;
        public $dateEnd;

        public static function tableName()
        {
            return 'exammarks';
        }

        public function getExams()
        {
            return $this -> hasOne(Exams::className(), ['id' => 'Exam_id']);
        }

        public function getStudent()
        {
            return $this -> hasOne(Student::className(), ['id' => 'Student_id']);
        }

        public function rules()
        {
            return [
                [['grous', 'subbj', 'mark', 'lect_id'], 'required'],
                [['grous', 'subbj', 'semes'], 'safe'],
                ['semes', 'number', 'min' => 1, 'max' => 8],
                [['mark', 'dateStart', 'dateEnd'], 'safe'],
                ['dateStart', 'date', 'format' => 'yyyy-mm-dd'],
                ['dateEnd', 'date', 'format' => 'yyyy-mm-dd'],
                [['dateStart', 'DateEnd'], 'required']
            ];
        }
    }