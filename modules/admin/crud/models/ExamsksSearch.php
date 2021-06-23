<?php

namespace app\modules\admin\crud\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\crud\models\Exams;

/**
 * ExamsksSearch represents the model behind the search form of `app\modules\admin\crud\models\Exams`.
 */
class ExamsksSearch extends Exams
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Subject_id', 'Group_id', 'Lexturer_id', 'Semestre'], 'integer'],
            [['Date'], 'safe'],
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
        $query = Exams::find();

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
            'Group_id' => $this->Group_id,
            'Date' => $this->Date,
            'Lexturer_id' => $this->Lexturer_id,
            'Semestre' => $this->Semestre,
        ]);

        return $dataProvider;
    }
}
