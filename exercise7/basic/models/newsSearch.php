<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\news;

/**
 * newsSearch represents the model behind the search form about `app\models\news`.
 */
class newsSearch extends news
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'slug'], 'integer'],
            [['name', 'nickname', 'address', 'email', 'website', 'comment', 'gender', 'cellphone'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = news::find();

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
            'user_id' => $this->user_id,
            'slug' => $this->slug,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'cellphone', $this->cellphone]);

        return $dataProvider;
    }
}
