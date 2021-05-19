<?php

    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use app\models\Student;
    use app\models\Grouppp;
    

    class StudentController extends Controller
    {
        

        public function actionIndex()
        {
            $model = new Student();
            $groups = Grouppp::find()
                -> all();

            if ($model -> load(Yii::$app -> request -> post()))                 //взять из формы все группы и найти их id
            {                    
                $query = Student::find();
                $query = $query
                    -> where(['=', 'Group_id', $model -> group])
                    -> all();

                return $this -> render('index-result', [
                    'students' => $query,
                    'model' => $model,
                    'subquery' => $subquery
                    ]);
            } else
            {
                return $this -> render('index', [
                    'groups' => $groups,
                    'model' => $model
                ]);
            }
        }
    }