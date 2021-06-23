<?php

namespace app\modules\admin\crud\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\crud\models\Workload;

/**
 * WorkloadSearch represents the model behind the search form of `app\modules\admin\crud\models\Workload`.
 */
class WorkloadSearch extends Workload
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Subject_id', 'Lab', 'Lect', 'Pract', 'Hours', 'Semester', 'Lecturer_id'], 'integer'],
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
        $query = Workload::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Subject_id' => $this->Subject_id,
            'Lab' => $this->Lab,
            'Lect' => $this->Lect,
            'Pract' => $this->Pract,
            'Hours' => $this->Hours,
            'Semester' => $this->Semester,
            'Lecturer_id' => $this->Lecturer_id,
        ]);

        return $dataProvider;
    }
}
