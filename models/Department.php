<?php

    namespace app\models;

    use yii\db\ActiveRecord;



    class Department extends ActiveRecord
    {
        public static function tableName()
        {
            return 'department';
        }

        public function attributeLabels()
        {
            return [
                'id' => 'ID',
                'Name' => 'Name',
                'Faculty_id' => 'Faculty ID',
            ];
        }

        public function getFaculty()
        {
            return $this -> hasOne(Faculty::className(), ['id' => 'Faculty_id']);
        }

        public function getLecturer()
        {
            return $this -> hasMany(Lecturer::className(), ['Department_id' => 'id']);
        }

        public function getSpecialities()
        {
            return $this->hasOne(Speciality::className(), ['Department_id' => 'id']);
        }

    }
    