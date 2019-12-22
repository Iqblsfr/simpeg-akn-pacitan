<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tb_karyawan}}`.
 */
class m191211_113549_create_tb_karyawan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tb_karyawan}}', [
            'id' => $this->primaryKey(),
            'id_kar' => $this->integer(11)->notNull(),
            'nip_kar' => $this->integer(11)->notNull(),
            'nama_kar' => $this->string(100)->notNull(),
            'pekerjaan' => $this->string(100)->notNull(),
            'no_hp' => $this->integer(20)->notNull(),
            'tgl_input_kar' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_karyawan}}');
    }
}
