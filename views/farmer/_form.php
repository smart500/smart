<?php

use app\models\Cities;
use app\models\Districts;
use app\models\Talukas;
use kartik\depdrop\DepDrop;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\Farmertype;
use yii\helpers\ArrayHelper;

use app\models\Sex;
use app\models\Cast;
use kartik\datecontrol\DateControl;

$farmertype = ArrayHelper::map(Farmertype::getAll(), 'id', 'name');
$sex = ArrayHelper::map(sex::getAll(), 'id', 'name');
$cast = ArrayHelper::map(Cast::getAll(), 'id', 'name');
$disrict = ArrayHelper::map(Districts::getAll(), 'id', 'name');
?>

<?php $form = ActiveForm::begin(['id' => 'farmer-form', 'enableClientValidation' => true, 'enableAjaxValidation' => false, 'options' => ['enctype' => 'multipart/form-data', 'autocomplete' => "off"]]); ?>
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-4">
            <?php echo $form->field($model, 'first_name_gu')->textInput(); ?>
        </div>
        <div class="col-4">
            <?php echo $form->field($model, 'middle_name_gu')->textInput(); ?>
        </div>
        <div class="col-4">
            <?php echo $form->field($model, 'last_name_gu')->textInput(); ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-4">
            <?php echo $form->field($model, 'first_name')->textInput(); ?>
        </div>
        <div class="col-4">
            <?php echo $form->field($model, 'middle_name')->textInput();
            ; ?>
        </div>
        <div class="col-4">
            <?php echo $form->field($model, 'last_name')->textInput();
            ; ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-4">
            <?php echo $form->field($model, 'district_id')->widget(Select2::classname(), [
                'data' => $disrict,
                'options' => ['placeholder' => 'જીલ્લો પસંદ કરો'],
                'pluginOptions' => [
                    'allowClear' => true,
                    'selectOnClose' => true
                ],
            ]);
            ?>
        </div>
        <div class="col-4">
            <?php
            echo $form->field($model, 'taluka_id')->widget(DepDrop::classname(), [
                'data' => !empty($model->district_id) ? Talukas::getTalukalist($model->district_id) : [],
                'options' => ['placeholder' => 'તાલુકો પસંદ કરો'],
                'type' => DepDrop::TYPE_SELECT2,
                'select2Options' => ['pluginOptions' => ['allowClear' => false]],
                'pluginOptions' => [
                    'depends' => ['farmer-district_id'],
                    'url' => Url::to(['/farmer/talukaslistbydistrict']),
                ]
            ]);
            ?>
        </div>
        <div class="col-4">
            <?php
            echo $form->field($model, 'city_id')->widget(DepDrop::classname(), [
                'data' => !empty($model->taluka_id) ? Cities::getcitylist($model->taluka_id) : [],
                'options' => ['placeholder' => 'શહેર/ગામ પસંદ કરો'],
                'type' => DepDrop::TYPE_SELECT2,
                'select2Options' => ['pluginOptions' => ['allowClear' => false]],
                'pluginOptions' => [
                    'depends' => ['farmer-taluka_id'],
                    'url' => Url::to(['/farmer/citylistbytaluka']),
                ]
            ]);
            ?>
        </div>

        <div class="row mb-4">
            <div class="col-4">
                <?php echo $form->field($model, 'mobile_no')->textInput(['inputmode' => 'text','lang' => 'en-US',]); ?>
            </div>
            <div class="col-4">
                <?php echo $form->field($model, 'birth_date')->widget(DateControl::classname()); ?>
            </div>
            <div class="col-4">
                <?php
                echo $form->field($model, 'joining_date')->widget(DateControl::classname()); ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4">
                <?php echo $form->field($model, 'farm_type_id')->widget(Select2::classname(), [
                    'data' => $farmertype,
                    'options' => ['placeholder' => 'ખેડૂત નો પ્રકાર પસંદ કરો '],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'selectOnClose' => true
                    ],
                ]);
                ?>
            </div>
            <div class="col-4">
                <?php
                echo $form->field($model, 'sex_id')->widget(Select2::classname(), [
                    'data' => $sex,
                    'options' => ['placeholder' => 'સ્ત્રી અથવા પુરુષ પસંદ કરો '],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'selectOnClose' => true
                    ],
                ]);
                ?>
            </div>
            <div class="col-4">
                <?php
                echo $form->field($model, 'cast_id')->widget(Select2::classname(), [
                    'data' => $cast,
                    'options' => ['placeholder' => 'જાતી પસંદ કરો '],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'selectOnClose' => true
                    ],
                ]);
                ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4">
                <?php echo $form->field($model, 'tharav_date')->widget(DateControl::classname()); ?>
            </div>
            <div class="col-4">
                <?php echo $form->field($model, 'tharav_no')->textInput([]); ?>
            </div>
            <div class="col-4">
            <?php echo $form->field($model, 'pan_card')->textInput([]); ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6">
                <?php echo $form->field($model, 'addhar_card_no')->textInput([]); ?>
            </div>
            <div class="col-6">
                <?php echo $form->field($model, 'voter_id_no')->textInput([]); ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="border-bottom mb-2">
            <h4>ખેડૂત ના ખાતા નંબર</h4>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row"></div>
        <div class="row mb-4">
            <div class="col-4">
                <?php echo $form->field($model, 'sav_ac_no')->textInput([]); ?>
            </div>
            <div class="col-4">
                <?php echo $form->field($model, 'emp_cif_no')->textInput([]); ?>
            </div>
            <div class="col-4">
                <?php echo $form->field($model, 'emp_cif1_no')->textInput([]); ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4">
                <?php echo $form->field($model, 'tkcc_short')->textInput([]); ?>
            </div>
            <div class="col-4">
                <?php echo $form->field($model, 'tkkc_3L')->textInput([]); ?>
            </div>
            <div class="col-4">
                <?php echo $form->field($model, 'kisan_mitra')->textInput([]); ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4">
                <?php echo $form->field($model, 'tkishan_su')->textInput([]); ?>
            </div>
            <div class="col-4">
                <?php echo $form->field($model, 'tgowndown_mm')->textInput([]); ?>
            </div>
            <div class="col-4">
                <?php echo $form->field($model, 'tjlg_grp')->textInput([]); ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4">
                <?php echo $form->field($model, 'pasu_loan')->textInput([]); ?>
            </div>
            <div class="col-4">
                <?php echo $form->field($model, 'tmadhyamudat_m')->textInput([]); ?>
            </div>
            <div class="col-4">
                <?php echo $form->field($model, 'other_cd1')->textInput([]); ?>
            </div>
        </div>


    </div>


    <div class="text-end">
        <?php echo Html::submitButton('Submit', ['class' => 'btn btn-primary mr-2']); ?>
        <?php echo yii\helpers\Html::a('Back', ["index"], ['class' => 'btn btn-secondary']); ?>
    </div>



    <?php ActiveForm::end() ?>