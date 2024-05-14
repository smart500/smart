<?php

use yii\db\Migration;

/**
 * Class m240222_000846_table_farm_type_create
 */
class m240222_000846_table_farm_type_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('farm_type',[
            'id' =>$this->primaryKey(),
            'name' => $this->string(100),
            'is_deleted' => $this->integer(1)->defaultValue(0)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240222_000846_table_farm_type_create cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240222_000846_table_farm_type_create cannot be reverted.\n";

        return false;
    }
    */
}
