<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "farmer".
 *
 * @property int $id
 * @property string|null $first_name_gu
 * @property string|null $middle_name_gu
 * @property string|null $last_name_gu
 * @property string|null $first_name
 * @property string|null $middle_name
 * @property string|null $last_name
 * @property int|null $mobile_no
 * @property string|null $birth_date
 * @property string|null $joining_date
 * @property string|null $regi_date
 * @property int|null $sex_id
 * @property int|null $farm_type_id
 * @property int|null $cast_id
 * @property string|null $tharav_date
 * @property string|null $tharav_no
 * @property int|null $sav_ac_no
 * @property int|null $emp_cif_no
 * @property int|null $emp_cif1_no
 * @property int|null $tkcc_short
 * @property int|null $tkishan_su
 * @property int|null $tmadhyamudat_m
 * @property int|null $tgowndown_mm
 * @property int|null $tjlg_grp
 * @property int|null $other_cd1
 * @property string|null $pan_card
 * @property string|null $voter_id_no
 * @property int|null $tkkc_3L
 * @property int|null $tmadhyamudat_2
 * @property int|null $pasu_loan
 * @property int|null $kisan_mitra
 * @property int|null $addhar_card_no
 * @property int|null $emp_sav_ac_no
 * @property int|null $district_id
 * @property int|null $taluka_id
 * @property int|null $city_id
 * @property int|null $is_deleted
 */
class Farmer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'farmer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['mobile_no', 'sex_id', 'farm_type_id', 'cast_id', 'sav_ac_no', 'emp_cif_no', 'emp_cif1_no', 'tkcc_short', 'tkishan_su', 'tmadhyamudat_m', 'tgowndown_mm', 'tjlg_grp', 'other_cd1', 'tkkc_3L', 'tmadhyamudat_2', 'pasu_loan', 'kisan_mitra', 'addhar_card_no', 'emp_sav_ac_no', 'district_id', 'taluka_id', 'city_id', 'is_deleted'], 'integer'],
            // [['first_name_gu', 'middle_name_gu', 'last_name_gu', 'first_name', 'middle_name', 'last_name'], 'string', 'max' => 100],
            // [['birth_date', 'joining_date', 'regi_date', 'tharav_date', 'tharav_no'], 'string', 'max' => 50],
            // [['pan_card', 'voter_id_no'], 'string', 'max' => 20],
            // [['first_name_gu', 'middle_name_gu', 'last_name_gu','mobile_no', 'sex_id', 'farm_type_id', 'cast_id','addhar_card_no','district_id', 'taluka_id', 'city_id','tharav_date','tharav_no','pan_card','birth_date', 'joining_date', 'regi_date', 'tharav_date', 'tharav_no'],'required',],
            // [['mobile_no'], 'match', 'pattern' => Yii::$app->params['phoneRegExp']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name_gu' => 'નામ',
            'middle_name_gu' => 'પિતા નું નામ',
            'last_name_gu' => 'અટક',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'mobile_no' => 'મોબાઇલ નંબર',
            'birth_date' => 'જન્મ તારીખ',
            'joining_date' => 'જોડાયાની તારીખ',
            'regi_date' => 'નોધણીની તારીખ',
            'sex_id' => 'લિંગ',
            'farm_type_id' => 'ખેડૂતનો પ્રકાર',
            'cast_id' => 'જાતિ',
            'tharav_date' => 'ઠરાવ તારીખ',
            'tharav_no' => 'ઠરાવ નંબર',
            'sav_ac_no' => 'બચત ખાતા નંબર',
            'emp_cif_no' => 'સી.આઈ.એફ નંબર ૧',
            'emp_cif1_no' => 'સી.આઈ.એફ નંબર ૨',
            'tkcc_short' => 'કે.સી.સી ૩ લાખ સુધી',
            'tkishan_su' => 'કિશાન સુવિધા ખાતા નંબર',
            'tmadhyamudat_m' => 'મધ્ય મુદત ખાતા નંબર',
            'tgowndown_mm' => 'ગોડાઊન ખાતા નંબર',
            'tjlg_grp' => 'જે.એલ.જી ખાતા નંબર',
            'other_cd1'=> 'ક્રુષીતત્કાલ ખાતા નંબર',
            'pan_card' => 'પાનકાર્ડ નંબર',
            'voter_id_no' => 'મતદાર ઓળખ નંબર',
            'tkkc_3L' => 'કે.સી.સી ૩ લાખ ઉપર',
            'pasu_loan' => 'પશુપાલન ખાતા નંબર',
            'kisan_mitra' => 'કિશાનમિત્ર ખાતા નંબર',
            'addhar_card_no' => 'આધાર કાર્ડ નંબર',
            'district_id' => 'જીલ્લો',
            'taluka_id' => 'તાલુકો',
            'city_id' => 'શહેર/ગામ',
            'is_deleted' => 'Is Deleted',
        ];
    }

    public function search()
    {
        $query = Farmer::find();
        // $query->andFilterWhere(["LIKE", "first_name",  $this->first_name]);
        return new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => [
                'id' => 'DESC'
            ]],            'pagination' => [
                'pageSize' => 30,
            ],
        ]);
    }


    public function beforeSave($insert)
    {
       
    }
}
