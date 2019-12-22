<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cuti_dl".
 *
 * @property int $id_cuti
 * @property int $nip
 * @property string $nama
 * @property string $keterangan
 * @property string $tgl_cuti
 *
 * @property Pegawai $nip0
 */
class CutiDl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuti_dl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'keterangan', 'tgl_cuti'], 'required'],
            [['nip'], 'integer'],
            [['tgl_cuti'], 'safe'],
            [['nama'], 'string', 'max' => 100],
            [['keterangan'], 'string', 'max' => 50],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cuti' => 'Id Cuti',
            'nip' => 'Nip',
            'nama' => 'Nama',
            'keterangan' => 'Keterangan',
            'tgl_cuti' => 'Tgl Cuti',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Pegawai::className(), ['nip' => 'nip']);
    }
}
