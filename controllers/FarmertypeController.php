<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\Farmertype;

class FarmertypeController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex()
    {
        $searchModel = new Farmertype();
        $searchModel->load(Yii::$app->request->get());
        $dataProvider = $searchModel->search();
        return $this->render('index', array(
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel
        ));
    }

    public function actionCreate()
    {
           
        $model = new Farmertype();
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
        $model = Farmertype::findOne($id);
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
