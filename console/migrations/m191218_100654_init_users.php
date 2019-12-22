<?php

use yii\db\Migration;

/**
 * Class m191218_100654_init_users
 */
class m191218_100654_init_users extends Migration
{

    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'authKey' => $this->string(32)->notNull(),
            'accessToken' => $this->string()->unique(),
            'role' => $this->string()->notNull()->unique(),

            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        echo "m180128_080943_init_user cannot be reverted.\n";

        return false;
    }

}
