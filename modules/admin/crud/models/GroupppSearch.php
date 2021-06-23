<?php

namespace app\modules\admin\crud\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\crud\models\Grouppp;

/**
 * GroupppSearch represents the model behind the search form of `app\modules\admin\crud\models\Grouppp`.
 */
class GroupppSearch extends Grouppp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Speciality_id', 'Course'], 'integer'],
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
        $query = Grouppp::find();

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
            'Speciality_id' => $this->Speciality_id,
            'Course' => $this->Course,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name]);

        return $dataProvider;
    }
}
