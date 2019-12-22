<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $nip
 * @property string $nama
 * @property string $no_telepon
 * @property string $email
 * @property string $alamat
 * @property string $tgl_lahir
 * @property string $tempat_lahir
 * @property string $gol_darah
 * @property string $status_karyawan
 * @property string $status_nikah
 * @property string $agama
 * @property string $npwp
 * @property string $tgl_masuk_krj
 *
 * @property Absen[] $absens
 * @property CutiDl[] $cutiDls
 * @property Gaji[] $gajis
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'no_telepon', 'email', 'alamat', 'tgl_lahir', 'tempat_lahir', 'gol_darah', 'status_karyawan', 'status_nikah', 'agama', 'npwp', 'tgl_masuk_krj'], 'required'],
            [['nip'], 'integer'],
            [['tgl_lahir', 'tgl_masuk_krj'], 'safe'],
            [['nama', 'alamat'], 'string', 'max' => 100],
            [['no_telepon'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 50],
            [['tempat_lahir', 'npwp'], 'string', 'max' => 25],
            [['gol_darah'], 'string', 'max' => 5],
            [['status_karyawan'], 'string', 'max' => 30],
            [['status_nikah', 'agama'], 'string', 'max' => 20],
            [['nip'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nama' => 'Nama',
            'no_telepon' => 'No Telepon',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'tgl_lahir' => 'Tgl Lahir',
            'tempat_lahir' => 'Tempat Lahir',
            'gol_darah' => 'Gol Darah',
            'status_karyawan' => 'Status Karyawan',
            'status_nikah' => 'Status Nikah',
            'agama' => 'Agama',
            'npwp' => 'Npwp',
            'tgl_masuk_krj' => 'Tgl Masuk Krj',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbsens()
    {
        return $this->hasMany(Absen::className(), ['nip' => 'nip']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCutiDls()
    {
        return $this->hasMany(CutiDl::className(), ['nip' => 'nip']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGajis()
    {
        return $this->hasMany(Gaji::className(), ['nip' => 'nip']);
    }
}
