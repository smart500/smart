<?php

use yii\db\Migration;

/**
 * Class m240222_022125_table_talukas_create
 */
class m240222_022125_table_talukas_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('talukas',[
            'id' =>$this->primaryKey(),
            'name' => $this->string(200),
            'distric_id' => $this->integer(50),
            'is_deleted' => $this->integer(1)->defaultValue(0)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240222_022125_table_talukas_create cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240222_022125_table_talukas_create cannot be reverted.\n";

        return false;
    }
    */
}
