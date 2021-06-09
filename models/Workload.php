<?php

    namespace app\models;

    use yii\db\ActiveRecord;



    class Workload extends ActiveRecord
    {
        public $dept;
        public $lect;
        public $semes;
        public $depart_id;

        public static function tableName()
        {
            return 'workload';
        }

        public function getLecturer()
        {
            return $this -> hasOne(Lecturer::className(),['id' => 'Lecturer_id']);
        }

        public function getSubject()
        {
            return $this -> hasOne(Subject::className(), ['id' => 'Subject_id']);
        }

        public function getPlanandworkload()
        {
            return $this -> hasMany(Planandworkload::className(), ['Workload_id' => 'id']);
        }

        public function getGroup()
        {
            return $this -> lecturer -> department -> speciality -> grouppp ->Name;
        }

        public function rules()
        {
            return [
                [['depart_id' ,'semes'], 'required'],
            ];
        }
    }