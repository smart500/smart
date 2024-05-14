<?php

use yii\db\Migration;

/**
 * Class m240227_225944_data_insert_table
 */
class m240227_225944_data_insert_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->insert('talukas',['name'=> 'સિટી દસ્ક્રોઈ','distric_id' => '1']);
        $this->insert('talukas',['name'=> 'બાવળા','distric_id' => '1']);
        $this->insert('talukas',['name'=> 'ધોળકા','distric_id' => '1']);
        $this->insert('talukas',['name'=> 'ધંધુકા','distric_id' => '1']);
        $this->insert('talukas',['name'=> 'ધોલેરા','distric_id' => '1']);
        $this->insert('talukas',['name'=> 'સાણંદ','distric_id' => '1']);
        $this->insert('talukas',['name'=> 'વિરમગામ','distric_id' => '1']);
        $this->insert('talukas',['name'=> 'માંડલ','distric_id' => '1']);
        $this->insert('talukas',['name'=> 'દેત્રોજ','distric_id' => '1']);
        $this->insert('talukas',['name'=> 'દહેગામ','distric_id' => '2']);
        $this->insert('talukas',['name'=> 'ગાંધીનગર ','distric_id' => '2']);
        $this->insert('farm_type',['name'=> 'નાના ખેડૂત']);
        $this->insert('farm_type',['name'=> 'મોટા ખેડૂત']);
        $this->insert('farm_type',['name'=> 'સીમાંત ખેડૂત']);
        $this->insert('farm_type',['name'=> 'ઉભડ ખેડૂત']);
        $this->insert('farm_type',['name'=> 'ખેતમજૂર']);
        $this->insert('farm_type',['name'=> 'કારીગર']);
        $this->insert('farm_type',['name'=> 'અન્ય ખેડૂત']);
    
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240227_225944_data_insert_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240227_225944_data_insert_table cannot be reverted.\n";

        return false;
    }
    */
}
