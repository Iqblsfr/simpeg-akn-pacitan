<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "absen".
 *
 * @property int $id_absen
 * @property int $nip
 * @property string $nama
 * @property string $jam_masuk
 * @property string $jam_pulang
 * @property string $status
 * @property string $waktu_kerja
 *
 * @property Pegawai $nip0
 */
class Absen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'absen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'jam_masuk', 'jam_pulang', 'status', 'waktu_kerja'], 'required'],
            [['nip'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['jam_masuk', 'jam_pulang', 'waktu_kerja'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 30],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_absen' => 'Id Absen',
            'nip' => 'Nip',
            'nama' => 'Nama',
            'jam_masuk' => 'Jam Masuk',
            'jam_pulang' => 'Jam Pulang',
            'status' => 'Status',
            'waktu_kerja' => 'Waktu Kerja',
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
