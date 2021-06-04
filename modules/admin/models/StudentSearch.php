<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Student;
use app\modules\admin\models\Grouppp;
use app\modules\admin\models\Speciality;
use app\modules\admin\models\Department;
use app\modules\admin\models\Faculty;

/**
 * StudentSearch represents the model behind the search form of `app\modules\admin\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Group_id', 'Childs', 'Stipend', ], 'integer'],
            [['FirstName', 'LastName', 'Gender', 'BirthDate', 'Faculty_id', 'genderrr', 'StudAge', 'stip', 'HasChilds'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Student::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }


        $departmentss = Department::find()
            -> select('id')
            -> where(['=', 'Faculty_id', $this -> Faculty_id]);

        $specialytiess = Speciality::find()
            -> select('id')
            -> where(['in', 'Department_id', $departmentss]);

        $grouss = Grouppp::find()
            -> select('id')
            -> where(['in', 'Speciality_id', $specialytiess]);

        if($this -> Faculty_id == 0)
        {
            $grouss = [];
        }

        $date =  (int)date("Y") - ($this -> StudAge);

        if($this -> StudAge == 0)
        {
            $date = 0;
        }
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Group_id' => $this -> Group_id,
            'Childs' => $this->Childs,
            'Stipend' => $this->Stipend,
            'Gender' => $this->genderrr,

            ]);

        $query->andFilterWhere(['like', 'FirstName', $this->FirstName])
            ->andFilterWhere(['like', 'LastName', $this->LastName])
            -> andFilterWhere(['like', 'BirthDate', $date])
            -> andFilterWhere(['in', 'Group_id', $grouss]);
        
        if(isset($this -> stip)){
            if($this -> stip == 0)
            {
                $query -> andFilterWhere(['<>', 'Stipend', 0]);
            } else {
                $query -> andFilterWhere(['=', 'Stipend', 0]);
            }
        }

        if(isset($this -> HasChilds)){
            if($this -> HasChilds == 0)
            {
                $query -> andFilterWhere(['<>', 'Childs', 0]);
            } else {
                $query -> andFilterWhere(['=', 'Childs', 0]);
            }
        }

        return $dataProvider;
    }
}
