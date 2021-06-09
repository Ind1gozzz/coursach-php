<?php

    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use app\models\Exams;
    use app\models\Grouppp;
    use app\models\Subject;



    class ExamsController extends Controller
    {
        public function actionIndex()
        {
            $model = new Exams();
            $groups = Grouppp::find()
                -> select('id, Name')
                -> all();
        
            $subjs = Subject::find()
                -> select('id, Name')
                -> all();
            $exams = Exams::find()
                -> all();

            if ($model -> load(Yii::$app -> request -> post()))
            {
                if(isset($model -> grous))
                {
                    if(isset($model -> subbj))
                    {
                        $exams = Exams::find()
                            -> andWhere(['=', 'Group_id', $model -> grous])
                            -> andWhere(['=', 'exams.Semestre', $model -> semes])
                            -> andWhere(['=', 'Subject_id', $model -> subbj])
                            -> all();
                    } else
                    {
                        $exams = Exams::find()
                        -> andWhere(['=', 'Group_id', $model -> grous])
                        -> andWhere(['=', 'exams.Semestre', $model -> semes])
                        -> all();
                    }
                } else
                {
                    $exams = Exams::find()
                        -> andWhere(['=', 'exams.Semestre', $model -> semes])
                        -> all();
                }

                return  $this -> render('index-result', [
                    'exams' => $exams,
                ]);
            } else 
            {
                return $this -> render('index', [
                    'groups' => $groups,
                    'subjs' => $subjs,
                    'exams' => $exams,
                    'model' => $model
                ]);
            }
        }
    }