<?php

    namespace app\models;

    use Yii;
    use yii\db\ActiveRecord;



    class Thesiswork extends ActiveRecord
    {
        public $lect_id;
        public $dept_id;
        public $Facult_id;
        public $post;

        public static function tableName()
        {
            return 'thesiswork';
        }

        public function getStudent()
        {
            return $this -> hasOne(Student::className(), ['id' => 'Student_id']);
        }

        public function getLecturer()
        {
            return $this -> hasOne(Lecturer::className(), ['id' => 'Lecturer_id']);
        }

        public function rules()
        {
            return [
                [['lect_id', 'dept_id'], 'number'],
                [['lect_id', 'dept_id'], 'safe'],
                [['dept_id', 'lect_id'], 'required'],
                [['Facult_id'], 'required'],
                ['post', 'required'],
                ['post', 'safe']
            ];
        }
    }