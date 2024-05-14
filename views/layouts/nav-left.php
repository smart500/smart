<?php
    $active = "active";
?>
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item <?php echo Yii::$app->controller->id == 'Farmer' ? $active : ''; ?>">
            <?php echo yii\helpers\Html::a('<i class="bi bi-people-fill"></i>Farmer', ["farmer/index"], ['class' => 'nav-link']); ?>
        </li>
        <li class="nav-item <?php echo Yii::$app->controller->id == 'customers' ? $active : ''; ?>">
            <?php //echo yii\helpers\Html::a('<i class="bi bi-people"></i> Customers', ["customers/index"], ['class' => 'nav-link']); ?>
        </li>
        <li class="nav-item <?php echo Yii::$app->controller->id == 'leads' ? $active : ''; ?>">
            <?php //echo yii\helpers\Html::a('<i class="bi bi-x-diamond"></i>Leads', ["leads/index"], ['class' => 'nav-link']); ?>
        </li>
        <li class="nav-item <?php echo Yii::$app->controller->id == 'wonleads' ? $active : ''; ?>">
            <?php //echo yii\helpers\Html::a('<i class="bi bi-x-diamond-fill"></i>Won Leads', ["wonleads/index"], ['class' => 'nav-link']); ?>
        </li>
        <li class="nav-item <?php echo Yii::$app->controller->id == 'cases' ? $active : ''; ?>">
            <?php //echo yii\helpers\Html::a('<i class="bi bi-building"></i> Cases', ["cases/index"], ['class' => 'nav-link']); ?>
        </li>
        <li class="nav-item <?php echo Yii::$app->controller->id == 'invoices' ? $active : ''; ?>">
            <?php //echo yii\helpers\Html::a('<i class="bi bi-currency-rupee"></i> Invoices', ["invoices/index"], ['class' => 'nav-link']); ?>
        </li>
        <li class="nav-item <?php echo Yii::$app->controller->id == 'masters' ? $active : ''; ?>">
            <?php //echo yii\helpers\Html::a('<i class="bi bi-gear-wide-connected"></i> Masters', ["masters/index"], ['class' => 'nav-link']); ?>
        </li>
    </ul>
</aside>