<?php

    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use app\models\Student;
    use app\models\Grouppp;
    use app\models\StudentSearch;
    use yii\web\NotFoundHttpException;
    use yii\filters\VerbFilter;
    use yii\data\ActiveDataProvider;
    

    class StudentController extends Controller
    {
        public function actionIndex()
        {
            $groups = Grouppp::find()
                ->all();
            $model = new StudentSearch();
            if ($model -> load(Yii::$app -> request -> post()) && $model -> validate())
            {
                $query = Student::find() -> andFilterWhere([
                    'Group_id' => $model -> group,
                    'Gender' => $model -> gender,
                    'Childs' => $model -> childs,
                    'Stipend' => $model -> stipend,       
                ])
                -> all();
                

                $students = $query;
                return $this -> render('index-result', [
                    'model' => $model,
                    'students' => $students

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