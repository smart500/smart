<?php

namespace app\controllers;

use app\models\Farmer;
use Yii;
use yii\web\Controller;

class FarmerController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex()
    {
        $searchModel = new Farmer();
        $searchModel->load(Yii::$app->request->get());
        $dataProvider = $searchModel->search();
        return $this->render('index', array(
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel
        ));
    }

    public function actionCreate()
    {
           
        $model = new Farmer();
        if ($data = Yii::$app->request->post()) {
            $model->load($data);
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', "Farmaer Type created successfully.");
                return $this->redirect(['index']);
            }
        }
        return $this->render('create', [
            'model' => $model
        ]);
    }
    
    public function actionUpdate($id)
    {
        $model = Farmer::findOne($id);
        if ($data = Yii::$app->request->post()) {
            $model->load($data);
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', "Farmaer Type Updated successfully.");
                return $this->redirect(['index']);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }
}
