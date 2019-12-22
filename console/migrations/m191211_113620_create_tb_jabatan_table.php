<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tb_jabatan}}`.
 */
class m191211_113620_create_tb_jabatan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tb_jabatan}}', [
            'id' => $this->primaryKey(),
            'id_jab' => $this->integer(11)->notNull(),
            'jabatan' => $this->string(100)->notNull(),
            'tgl_input_jab' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_jabatan}}');
    }
}
