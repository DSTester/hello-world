<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\db\Modelt1;

class Modelt1Search extends Modelt1
{
    public function rules()
    {
        // only fields in rules() are searchable
        return [
            [['id'], 'integer'],
            [['id', 'bez', 't3id', 'bool1', 'int1'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Modelt1::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

		$query->joinWith('modelt3');

		$dataProvider->setSort([
			'attributes' => [
				'id',
				'bez',
				't3id' => [
					'asc' => ['modelt3.text1' => SORT_ASC],
					'desc' => ['modelt3.text1' => SORT_DESC],
					'default' => SORT_AC
				],
				'bool1',
				'int1'
			]
		]);

        // load the search form data and validate
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        // adjust the query by adding the filters
        $query->andFilterWhere(['id' => $this->id])
			->andFilterWhere(['like', 'bez', $this->bez])
			->andFilterWhere(['t3id' => $this->t3id])
			->andFilterWhere(['bool1' => $this->bool1])
			->andFilterWhere([self::tableName().'.int1' => $this->int1]);

		/*$dataProvider->sort->attributes['modelt3.text1'] = [
			'asc' => ['modelt3.text1' => SORT_ASC],
			'desc' => ['modelt3.text1' => SORT_DESC]
		];*/


        return $dataProvider;
    }
}