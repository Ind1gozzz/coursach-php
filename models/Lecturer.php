<?php   

    namespace app\models;

    use yii\db\ActiveRecord;



    class Lecturer extends ActiveRecord
    {
        public $faculty_id;
        public $depart_id;
        public $datestart;
        public $dateend;

        public static function tableName()
        {
            return 'lecturer';
        }

        public function getDepartment()
        {
            return $this -> hasOne(Department::className(), ['id' => 'Department_id']);
        }

        public function getDissertation()
        {
            return $this -> hasOne(Dissertation::className(), ['Lecturer_id' => 'id']);
        }

        public function rules()
        {
            return [
                [['faculty_id', 'depart_id'], 'safe'],
                [['faculty_id', 'depart_id'], 'integer'],
                ['datestart', 'date', 'format' => 'dd-mm-yyyy'],
                ['dateend', 'date', 'format' => 'dd-mm-yyyy'],
                [['datestart', 'dateend'], 'required']
            ];
        }
    }