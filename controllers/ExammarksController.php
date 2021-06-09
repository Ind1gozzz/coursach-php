<?php

    namespace app\controllers;

    use Yii;
    use yii\db\Expression;
    use yii\web\Controller;
    use app\models\Exammarks;
    use app\models\Grouppp;
    use app\models\Subject;
    use app\models\Lecturer;



    class ExammarksController extends Controller
    {
        public function actionIndex()
        {
            $model = new Exammarks();
            $groups = Grouppp::find()
                -> select('id, Name')
                -> all();
            
            $subjs = Subject::find()
                -> select('id, Name')
                -> all();
            $exammarks = Exammarks::find()
                -> all();

            if ($model -> load(Yii::$app -> request -> post()))
            {
                $exammarks = Exammarks::find() -> join('right join', 'exams', 'exams.id = Exam_id') -> join('right join', 'student', 'student.id = Student_id')
                    -> andWhere(['=', 'exams.Subject_id', $model -> subbj])
                    -> andWhere(['=', 'student.Group_id', $model -> grous])
                    -> andWhere(['=', 'exammarks.Mark', $model -> mark])
                    -> all();

                return $this -> render('index-result', [
                    'exammarks' => $exammarks
                ]);
            } else
            {
                return $this -> render('index', [
                    'model' => $model,
                    'groups' => $groups,
                    'subjs' => $subjs,
                    'exammarks' => $exammarks
                ]);
            }
        }

        public function actionExams()
        {
            $model = new Exammarks();
            $groups = Grouppp::find()
                -> select('id, Name')
                -> all();
            
            $subjs = Subject::find()
                -> select('id, Name')
                -> all();
            $exammarks = Exammarks::find()
                -> all();

            if($model -> load(Yii::$app -> request -> post()))
            {
                if($model -> mark == 5)
                {
                    $model -> mark = [1,2,3,4];
                } elseif($model -> mark == 1)
                {
                    $model -> mark = [2,3];
                } elseif($model -> mark == 2)
                {
                    $model -> mark = [2];
                }

                $query = Exammarks::find() -> join('right join', 'exams', 'exams.id = Exam_id') -> join('right join', 'student', 'student.id = Student_id')
                    -> andWhere(['=', 'exams.Subject_id', $model -> subbj])
                    -> andWhere(['=', 'exams.Semestre', $model -> semes])
                    -> andWhere(['not in', 'exammarks.Mark', $model -> mark])
                    -> all();
                return $this -> render('exams-result', [
                    'exammarks' => $query
                ]);
            } else
            {
                return $this -> render('exams', [
                    'model' => $model,
                    'groups' => $groups,
                    'subjs' => $subjs,
                    'exammarks' => $exammarks
                ]);
            }
        }

        public function actionMark()
        {
            $model = new Exammarks();
            $groups = Grouppp::find()
                -> select('id, Name')
                -> all();
            
            $subjs = Subject::find()
                -> select('id, Name')
                -> all();

            $lects = Lecturer::find()
                -> select(['id', 'concat(FirstName, " " , LastName) as fullName'])
                -> asArray()
                -> all();

            $marks = Exammarks::find()
                -> all();

            if($model -> load(Yii::$app -> request -> post()))
            {
                $query = Exammarks::find() -> join('right join', 'exams', 'exams.id = Exam_id') 
                    -> andWhere(['=', 'exams.Group_id', $model -> grous])
                    -> andWhere(['=', 'exams.Lexturer_id', $model -> lect_id])
                    -> andWhere(['=', 'exams.Subject_id', $model -> subbj])
                    -> andWhere(['between', 'exams.Date', "{$model -> dateStart}", "{$model -> dateEnd}"])
                    -> andWhere(['=', 'exams.Semestre', $model -> semes])
                    -> all();
                

                return $this -> render('mark-result', [
                    'marks' => $query,
                ]);
            } else {
                return $this -> render('mark', [
                    'marks' => $marks,
                    'groups' => $groups,
                    'subjs' => $subjs,
                    'lects' => $lects,
                    'model' => $model
                    ]);
            }

        }
    }