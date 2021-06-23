<?php

namespace app\modules\admin\crud\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\crud\models\Speciality;

/**
 * SpecialitySearch represents the model behind the search form of `app\modules\admin\crud\models\Speciality`.
 */
class SpecialitySearch extends Speciality
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Department_id'], 'integer'],
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
        $query = Speciality::find();

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
            'Department_id' => $this->Department_id,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name]);

        return $dataProvider;
    }
}
