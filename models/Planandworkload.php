<?php

    namespace app\models;

    use yii\db\ActiveRecord;



    class PlanandWorkload extends ActiveRecord
    {
        public static function tableName()
        {
            return 'planandworkload';
        }

        public function getWorkload()
        {
            return $this -> hasMany(Workload::className(), ['id' => 'Workload_id']);
        }

        public function getPlan()
        {
            return $this -> hasMany(Plan::className(), ['id' => 'Plan_id']);
        }
    }