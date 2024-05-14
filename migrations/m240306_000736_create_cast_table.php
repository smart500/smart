<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cast}}`.
 */
class m240306_000736_create_cast_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cast', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'is_deleted' => $this->integer(1)->defaultValue(0)
        ]);

        $this->insert('cast',['name' => 'અનુસૂચિત જનજાતી']);
        $this->insert('cast',['name' => 'અનુસૂચિત જાતી']);
        $this->insert('cast',['name' => 'અન્ય']);
        $this->insert('cast',['name' => 'લઘુમતી']);
        $this->insert('cast',['name' => 'ઓબીસી']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cast}}');
    }
}
