<?php

    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use app\models\Thesiswork;
    use app\models\Lecturer;
    use app\models\Department;
    use app\models\Faculty;
    use app\models\Post;



    class ThesisworkController extends Controller
    {
        public function actionIndex()
        {
            $model = new Thesiswork();
            $thess = Thesiswork::find()
                -> all();

            $lects = Lecturer::find()
                -> select(['id', 'concat(FirstName, " " , LastName) as fullName'])
                -> asArray()
                -> all();

            $departs = Department::find()
                -> select('id, Name')
                -> all();

            
            if($model -> load(Yii::$app -> request -> post()))
            {
                $query = Thesiswork::find() -> join('right join', 'lecturer', 'lecturer.id = Lecturer_id')
                    -> where(['=', 'lecturer.Depatment_id', $model -> dept_id])
                    -> where(['in', 'lecturer.id', $model -> lect_id])
                    -> all();

                return $this -> render('index-result', [
                    'thess' => $query,
                ]);
            
            } else
            {
                return $this -> render('index', [
                    'model' => $model,
                    'thess' => $thess,
                    'lects' => $lects,
                    'departs' => $departs
                ]);
            }
        }

        public function actionWorktheme()
        {
            $model = new Thesiswork();
            $thess = Thesiswork::find()
                -> all();

            $lects = Lecturer::find() -> join('right join', 'post', 'post.Lecturer_id = lecturer.id')
                -> select(['lecturer.id', 'concat(FirstName, " " , LastName) as fullName'])
                -> where(['=', 'post.Post', "Доцент"])
                -> orWhere(['=', 'post.Post', 'Профессор'])
                -> asArray()
                -> all();

            $departs = Department::find()
                -> select('id, Name')
                -> all();
            $faculties = Faculty::find()
                -> select('id, Name')
                -> all(); 

            $posts = Post::find()
                -> select('id, Post')
                -> all();

            if($model -> load(Yii::$app -> request -> post()))
            {
                $departmentss = Department::find()
                    -> select('id')
                    -> where(['=', 'Faculty_id', $model -> Facult_id]);

                $query = Thesiswork::find() -> join('right join', 'lecturer', 'lecturer.id = Lecturer_id') -> join('right join', 'post', 'lecturer.id = Post.Lecturer_id')
                    -> andWhere(['in', 'lecturer.Department_id', $departmentss])
                    -> andWhere(['=', 'lecturer.Department_id', $model -> dept_id])
                    -> andWhere(['=', 'post.Post', $model -> post])
                    -> all();
                    return $this -> render('worktheme-result', [
                        'thess' => $query,
                    ]);
        
            } else
            {
                return $this -> render('worktheme', [
                    'model' => $model,
                    'thess' => $thess,
                    'posts' => $posts,
                    'departs' => $departs,
                    'faculties' => $faculties
                ]);
            }
        }
    }