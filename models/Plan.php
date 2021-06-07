<?php

    namespace app\models;

    use yii\db\ActiveRecord;



    class Plan extends ActiveRecord
    {
        public static function tableName()
        {
            return 'plan';
        }

        public function getPlanandworkload()
        {
            return $this -> hasMany(Planandworkload::className(), ['Plan_id' => 'id']);
        }

        public function getGrouppp()
        {
            return $this -> hsaOne(Grouppp::className(), ['id' => 'Group_id']);
        }
    }