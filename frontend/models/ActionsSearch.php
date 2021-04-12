<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Actions;

/**
 * ActionsSearch represents the model behind the search form of `app\models\Actions`.
 */
class ActionsSearch extends Actions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'percent', 'level', 'rules'], 'integer'],
            [['title', 'group', 'time_active', 'created_at', 'updated_at'], 'safe'],
            [['active'], 'boolean'],
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
        $query = Actions::find();

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
            'percent' => $this->percent,
            'level' => $this->level,
            'rules' => $this->rules,
            'active' => $this->active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'title', $this->title])
            ->andFilterWhere(['ilike', 'group', $this->group])
            ->andFilterWhere(['ilike', 'time_active', $this->time_active]);

        return $dataProvider;
    }
}
