<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tb_absensi}}`.
 */
class m191211_113528_create_tb_absensi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tb_absensi}}', [
            'id' => $this->primaryKey(),
            'id_abs' => $this->integer(11)->notNull(),
            'nip_kar' => $this->integer(100)->notNull(),
            'tanggal' => $this->integer(11),
            'kode_absen' => $this->integer(11)->notNull(),
            'jam_masuk' => $this->integer(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_absensi}}');
    }
}
