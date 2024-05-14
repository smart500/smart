<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sex}}`.
 */
class m240227_235335_create_sex_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sex', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'is_deleted' => $this->integer(1)->defaultValue(0)
        ]);

        $this->insert('sex',['name'=> 'સ્ત્રી']);
        $this->insert('sex',['name'=> 'પુરુષ']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('sex');
    }
}
