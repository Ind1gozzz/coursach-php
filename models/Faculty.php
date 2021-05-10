<?php

    namespace app\models;

    use yii\db\ActiveRecord;



    class Faculty extends ActiveRecord
    {
        

        public static function tableName()
        {
            return 'faculty';
        }

        public function getDepartment()
        {
            return $this -> hasMany(Department::className(), ['Faculty_id' => 'id']);
        }
    }
    