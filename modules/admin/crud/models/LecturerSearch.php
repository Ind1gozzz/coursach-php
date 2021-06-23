<?php

namespace app\modules\admin\crud\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\crud\models\Lecturer;

/**
 * LecturerSearch represents the model behind the search form of `app\modules\admin\crud\models\Lecturer`.
 */
class LecturerSearch extends Lecturer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Salary', 'Childs', 'Department_id'], 'integer'],
            [['FirstName', 'LastName', 'Gender', 'BirthDate'], 'safe'],
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
        $query = Lecturer::find();

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
            'BirthDate' => $this->BirthDate,
            'Salary' => $this->Salary,
            'Childs' => $this->Childs,
            'Department_id' => $this->Department_id,
        ]);

        $query->andFilterWhere(['like', 'FirstName', $this->FirstName])
            ->andFilterWhere(['like', 'LastName', $this->LastName])
            ->andFilterWhere(['like', 'Gender', $this->Gender]);

        return $dataProvider;
    }
}
