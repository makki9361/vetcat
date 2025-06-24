<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vets;

/**
 * VetsSearch represents the model behind the search form of `app\models\Vets`.
 */
class VetsSearch extends Vets
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'post_id'], 'integer'],
            [['first_name', 'second_name', 'last_name', 'image'], 'safe'],
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
    public function attributeLabels(){
        $attributeLabels = [
            'first_name' => 'Имя',
            'second_name' => 'Фамилия',
            ];
             return $attributeLabels;
        }

    public function search($params)
    {
        $query = Vets::find();

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
            'post_id' => $this->post_id,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'second_name', $this->second_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
