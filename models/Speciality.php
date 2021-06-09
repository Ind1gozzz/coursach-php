<?php

    namespace app\models;

    use yii\db\ActiveRecord;



    class Speciality extends ActiveRecord
    {
        public static function tableName()
        {
            return 'speciality';
        }

        public function attributeLabels()
        {
            return [
                'id' => 'ID',
                'Name' => 'Name',
                'Department_id' => 'Department ID',
            ];
        }    

        public function getGrouppp()
        {
            return $this -> hasMany(Grouppp::className(), ['Speciality_id ' => 'id']);
        }

        public function getDepartment()
        {
            return $this -> hasOne(Department::className(), ['id' => 'Department_id']);
        }

    }
    