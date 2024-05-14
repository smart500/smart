<?php

use yii\db\Migration;

/**
 * Class m240427_103807_farmer_table_create
 */
class m240427_103807_farmer_table_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('farmer', [
            'id' => $this->primaryKey(),
            'first_name_gu' => $this->string(100),
            'middle_name_gu' => $this->string(100),
            'last_name_gu' => $this->string(100),
            'first_name' => $this->string(100),
            'middle_name' => $this->string(100),
            'last_name' => $this->string(100),
            'mobile_no' => $this->integer(10),
            'birth_date' =>$this->string(50),
            'joining_date' =>$this->string(50),
            'regi_date' =>$this->string(50),
            'sex_id' =>$this->integer(5),
            'farm_type_id' => $this->integer(5),
            'cast_id' =>$this->integer(5),
            'tharav_date' =>$this->string(50),
            'tharav_no' =>$this->string(50),
            'sav_ac_no' => $this->integer(20),
            'emp_cif_no' => $this->integer(20),
            'emp_cif1_no' => $this->integer(20),
            'tkcc_short' => $this->integer(20),
            'tkishan_su' => $this->integer(20),
            'tmadhyamudat_m' => $this->integer(20),
            'tgowndown_mm' => $this->integer(20),
            'tjlg_grp' => $this->integer(20),
            'other_cd1' => $this->integer(20),
            'pan_card' => $this->string(20),
            'voter_id_no' => $this->string(20),
            'tkkc_3L' => $this->integer(20),
            'tmadhyamudat_2' => $this->integer(20),
            'pasu_loan' => $this->integer(20),
            'kisan_mitra' => $this->integer(20),
            'addhar_card_no' => $this->integer(20),
            'emp_sav_ac_no' => $this->integer(20),
            'district_id' => $this->integer(5),
            'taluka_id' => $this->integer(5),
            'city_id' => $this->integer(5), 
            'is_deleted' => $this->integer(1)->defaultValue(0)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('farmer');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240427_103807_farmer_table_create cannot be reverted.\n";

        return false;
    }
    */
}
