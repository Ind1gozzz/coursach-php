<?php

namespace app\modules\admin\crud\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\crud\models\Dissertation;

/**
 * DissertationtSearch represents the model behind the search form of `app\modules\admin\crud\models\Dissertation`.
 */
class DissertationtSearch extends Dissertation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Lecturer_id'], 'integer'],
            [['Theme', 'Degree', 'DateDiss'], 'safe'],
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
        $query = Dissertation::find();

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
            'DateDiss' => $this->DateDiss,
            'Lecturer_id' => $this->Lecturer_id,
        ]);

        $query->andFilterWhere(['like', 'Theme', $this->Theme])
            ->andFilterWhere(['like', 'Degree', $this->Degree]);

        return $dataProvider;
    }
}
