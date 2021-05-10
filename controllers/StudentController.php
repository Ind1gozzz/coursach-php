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
            $model = new Grouppp();
            $groups = Grouppp::find()
                -> all();

            if ($model -> load(Yii::$app -> request -> post()))                 //взять из формы все группы и найти их id
            {
                $subquery = array();
                $subquery = Grouppp::find()
                    -> where(['=', 'id', "{$model -> grow[0]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[1]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[2]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[3]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[4]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[5]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[6]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[7]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[8]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[9]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[10]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[11]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[12]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[13]}"])
                    -> orWhere(['=', 'id', "{$model -> grow[14]}"])
                    -> all();
                $query = Student::find();
                $query = $query
                    -> where(['=', 'Group_id', $subquery[0] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[1] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[2] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[3] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[4] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[5] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[6] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[7] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[8] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[9] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[10] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[11] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[12] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[13] -> id])
                    -> orWhere(['=', 'Group_id', $subquery[14] -> id])
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