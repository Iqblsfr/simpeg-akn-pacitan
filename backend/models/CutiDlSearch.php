<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CutiDl;

/**
 * CutiDlSearch represents the model behind the search form of `backend\models\CutiDl`.
 */
class CutiDlSearch extends CutiDl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cuti', 'nip'], 'integer'],
            [['nama', 'keterangan', 'tgl_cuti'], 'safe'],
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
        $query = CutiDl::find();

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
            'id_cuti' => $this->id_cuti,
            'nip' => $this->nip,
            'tgl_cuti' => $this->tgl_cuti,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
