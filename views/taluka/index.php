<?php

use app\models\Districts;
use yii\grid\GridView;
use kartik\select2\Select2;
use yii\widgets\Pjax;

?>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">તાલુકો</h5>
            <?php echo yii\helpers\Html::a('Create Taluka', ["taluka/create"], ['class' => 'btn btn-sm btn-primary mr-2']); ?>
        </div>
        <?php 
        Pjax::begin(); 
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'columns' => [
               
                [
                    'label' => 'તાલુકા નું નામ',
                    'attribute' => 'name',
                ],
                [
                    'label' => 'જીલ્લા નું નામ',
                    'attribute' => 'distric_id',
                    // 'filter' => Select2::widget([
                    //     'name' => 'Talukas[distric_id]',
                    //     'value' => $searchModel->distric_id,
                    //     'data' => Districts::getDistricts(),
                    //     'options' => [
                            
                    //     ],
                    //     'pluginOptions' => [
                    //         'allowClear' => true
                    //     ]
                    // ]),
                    'value' => function($data) {
                        return $data->district->name;
                    }
                ],
                // [
                //     'class' => 'yii\grid\ActionColumn',
                //     'template' => '{update}',
                //     'header' => 'Action',
                //     'headerOptions' => ['class' => 'text-center'],
                //     'contentOptions' => ['class' => 'col-1 text-center'],
                // ],
            ],
        ]);
        Pjax::end();
        ?>
    </div>
</div>