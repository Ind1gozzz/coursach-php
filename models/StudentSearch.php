<?php

    namespace app\models;

    use yii\base\Model;
    use app\models\Student;



    class StudentSearch extends Student
    {        
        public function rules()
        {
            return [
                [['FirstName', 'LastName', 'gender'], 'string'],
                [['BirthDate'], 'safe'],
                [['childs', 'stipend'], 'integer'],
                ['group', 'integer']
            ];
        }


    }