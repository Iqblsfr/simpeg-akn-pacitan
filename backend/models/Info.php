<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id_berita
 * @property string $berita
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_berita', 'berita'], 'required'],
            [['id_berita'], 'integer'],
            [['berita'], 'string', 'max' => 300],
            [['id_berita'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'berita' => 'Berita',
        ];
    }
}
