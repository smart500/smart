<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\Districts;

?>

<?php $form = ActiveForm::begin(['id' => 'farmer-form', 'enableClientValidation' => true, 'enableAjaxValidation' => false, 'options' => ['enctype' => 'multipart/form-data', 'autocomplete' => "off"]]);?>
<div class="row mb-4">
    <div class="col-4">
        <?php echo $form->field($model, 'first_name_gu'); ?>
    </div>
    <div class="col-4">
        <?php echo $form->field($model, 'middle_name_gu'); ?>
    </div>
    <div class="col-4">
        <?php echo $form->field($model, 'last_name_gu'); ?>
    </div>
</div>
<div class="row mb-4">
    <div class="col-4">
        <?php echo $form->field($model, 'first_name'); ?>
    </div>
    <div class="col-4">
        <?php echo $form->field($model, 'middle_name'); ?>
    </div>
    <div class="col-4">
        <?php echo $form->field($model, 'last_name'); ?>
    </div>
    </div>
<div class="row mb-4">
    <div class="col-4">
    <?php echo $form->field($model, 'mobile_no'); ?>
    </div>
    <div class="col-4">
    <?php echo $form->field($model, 'birth_date'); ?>
    </div>
    <div class="col-4">
    <?php echo $form->field($model, 'joining_date'); ?>
    </div> 
</div>
<div class="row mb-4">
    <div class="col-4">
    <?php echo $form->field($model, 'regi_date'); ?>
    </div>
    <div class="col-4">
    <?php echo $form->field($model, 'sex_id'); ?>
    </div>
    <div class="col-4">
    <?php echo $form->field($model, 'farm_type_id'); ?>
    </div> 
</div>
<div class="row mb-4">
    <div class="col-4">
    <?php echo $form->field($model, 'regi_date'); ?>
    </div>
    <div class="col-4">
    <?php echo $form->field($model, 'sex_id'); ?>
    </div>
    <div class="col-4">
    <?php echo $form->field($model, 'farm_type_id'); ?>
    </div> 
</div>
<div class="row mb-4">
    <div class="col-4">
    <?php echo $form->field($model, 'regi_date'); ?>
    </div>
    <div class="col-4">
    <?php echo $form->field($model, 'sex_id'); ?>
    </div>
    <div class="col-4">
    <?php echo $form->field($model, 'farm_type_id'); ?>
    </div> 
</div>
<div class="row mb-4">
    <div class="col-4">
    <?php echo $form->field($model, 'regi_date'); ?>
    </div>
    <div class="col-4">
    <?php echo $form->field($model, 'sex_id'); ?>
    </div>
    <div class="col-4">
    <?php echo $form->field($model, 'farm_type_id'); ?>
    </div> 
</div>
    <div class="row">
        <div class="border-bottom mb-2"></div>
    </div>
<div class="text-end">
    <?php echo Html::submitButton('Submit', ['class' => 'btn btn-primary mr-2']); ?>
    <?php echo yii\helpers\Html::a('Back', ["index"], ['class' => 'btn btn-secondary']); ?>
</div>



<?php ActiveForm::end() ?>