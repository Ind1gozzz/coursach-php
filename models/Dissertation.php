<?php   

    namespace app\models;

    use yii\db\ActiveRecord;



    class Dissertation extends ActiveRecord
    {
        public static function tableName()
        {
            return 'dissertation';
        }

        public function getLeccturer()
        {
            return $this -> hasOne(Department::className(), ['id' => 'Lecturer_id']);
        }
    }