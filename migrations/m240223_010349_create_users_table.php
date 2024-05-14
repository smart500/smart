<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m240223_010349_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(200),
            'last_name' => $this->string(200),
            'mobile_number' => $this->integer(15),
            'username' => $this->string(200),
            'password' => $this->string(100),
            'mandli_name'=> $this->string(200),
            'is_deleted' => $this->integer(1)->defaultValue(0)
        ]);

        $this->insert('users', [
            'first_name' => 'alpesh',
            'last_name' => 'vaghela',
            'mobile_number' => '9662026283',
            'username' => 'alpesh',
            'password' => Yii::$app->security->generatePasswordHash('admin'),
            'mandli_name' => 'admin'
          
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
