<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gaji".
 *
 * @property int $id_gaji
 * @property int $nip
 * @property string $nama
 * @property int $total_gaji
 *
 * @property Pegawai $nip0
 */
class Gaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'total_gaji'], 'required'],
            [['nip', 'total_gaji'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_gaji' => 'Id Gaji',
            'nip' => 'Nip',
            'nama' => 'Nama',
            'total_gaji' => 'Total Gaji',
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
