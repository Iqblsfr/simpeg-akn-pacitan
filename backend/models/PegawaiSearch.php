<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pegawai;

/**
 * PegawaiSearch represents the model behind the search form of `backend\models\Pegawai`.
 */
class PegawaiSearch extends Pegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip'], 'integer'],
            [['nama', 'no_telepon', 'email', 'alamat', 'tgl_lahir', 'tempat_lahir', 'gol_darah', 'status_karyawan', 'status_nikah', 'agama', 'npwp', 'tgl_masuk_krj'], 'safe'],
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
        $query = Pegawai::find();

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
            'nip' => $this->nip,
            'tgl_lahir' => $this->tgl_lahir,
            'tgl_masuk_krj' => $this->tgl_masuk_krj,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_telepon', $this->no_telepon])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'gol_darah', $this->gol_darah])
            ->andFilterWhere(['like', 'status_karyawan', $this->status_karyawan])
            ->andFilterWhere(['like', 'status_nikah', $this->status_nikah])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'npwp', $this->npwp]);

        return $dataProvider;
    }
}
