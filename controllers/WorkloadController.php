<?php 

    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use app\models\Workload;
    use app\models\Department;



    class WorkloadController extends Controller
    {
        public function actionIndex()
        {
            $workloads = Workload::find() -> innerJoin('speciality') -> innerJoin('Grouppp')
                -> all();

            return $this -> render('index-result', [
                'workloads' => $workloads,
            ]);
        }

        public function actionWorkload()
        {
            $model = new Workload();
            $workloads = Workload::find()
                -> all();

            $departs = Department::find()
                -> select('id, Name')
                -> all();

            if ($model -> load(Yii::$app -> request -> post()) && $model -> validate())
            {
                $query = Workload::find() -> join('right join', 'lecturer', 'lecturer.id = Lecturer_id')
                    -> andWhere(['=', 'lecturer.Department_id', $model -> depart_id])
                    -> andWhere(['=', 'Semester', $model -> semes])
                    -> all();

                 return $this -> render('workload-result', [
                    'workloads' => $query,
                    'model' => $model
                ]);
            } else
            {
                return $this -> render('workload', [
                    'workloads' => $workloads,
                    'departs' => $departs,
                    'model' => $model

                ]);
            }
           
        }
    }