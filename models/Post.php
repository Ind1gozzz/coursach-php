<?php   

    namespace app\models;

    use yii\db\ActiveRecord;



    class Post extends ActiveRecord
    {
        public function getLecturer()
        {
            return $this -> hasOne(Lecturer::className(), ['id' => 'Lecturer_id']);
        }
    }