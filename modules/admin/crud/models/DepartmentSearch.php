<?php

namespace app\modules\admin\crud\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\crud\models\Department;

/**
 * DepartmentSearch represents the model behind the search form of `app\modules\admin\crud\models\Department`.
 */
class DepartmentSearch extends Department
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Faculty_id'], 'integer'],
            [['Name'], 'safe'],
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
        $query = Department::find();

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
            'Faculty_id' => $this->Faculty_id,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name]);

        return $dataProvider;
    }
}