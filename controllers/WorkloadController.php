<?php 

    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use app\models\Workload;



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
    }