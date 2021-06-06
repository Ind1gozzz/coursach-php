<?php

    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use app\models\Lecturer;
    use app\models\Faculty;
use yii\data\ActiveDataProvider;
use app\models\Department;



    class LecturerController extends Controller
    {
        public function actionIndex()
        {
            $model = new Lecturer();
            $faculties = Faculty::find()
                -> select('id, Name')
                -> all();

            $departments = Department::find()
                -> select('id, Name')
                -> all();

            




            
            if ($model -> load(Yii::$app -> request -> post()))
            {
                $facults = Department::find()
                    -> select('id')
                    -> where(['=', 'Faculty_id', $model -> faculty_id]);
                $depart = Department::find()
                    -> select('id')
                    -> where(['=', 'Faculty_id', $model -> depart_id]);


                
                $query = Lecturer::find() -> JoinWith('dissertation') -> InnerJoinWith('department')
                    -> where(['in', 'Department_id', $facults])
                    -> orWhere(['in', 'Department_id', $depart])
                    -> andWhere(['is not', 'Theme', null])
                    -> orWhere(['between', 'DateDiss', $model -> datestart, $model -> dateend])
                    -> all();


                return $this -> render('index-result', [
                    'lecturers' => $query,
                    'model' => $model 
                ]);
            } else 
            {
                return $this -> render('index', [
                    'model' => $model,
                    'faculties' => $faculties,
                    'departments' => $departments,
                ]);
            }

        
  
        }

    }