<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Absen;

/**
 * AbsenSearch represents the model behind the search form of `backend\models\Absen`.
 */
class AbsenSearch extends Absen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_absen', 'nip'], 'integer'],
            [['nama', 'jam_masuk', 'jam_pulang', 'status', 'waktu_kerja'], 'safe'],
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
        $query = Absen::find();

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
            'id_absen' => $this->id_absen,
            'nip' => $this->nip,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jam_masuk', $this->jam_masuk])
            ->andFilterWhere(['like', 'jam_pulang', $this->jam_pulang])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'waktu_kerja', $this->waktu_kerja]);

        return $dataProvider;
    }
}
