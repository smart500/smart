<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\Cities;


class CityController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex()
    {
        $searchModel = new Cities();
        $searchModel->load(Yii::$app->request->get());
        $dataProvider = $searchModel->search();
        return $this->render('index', array(
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel
        ));
    }

    public function actionCreate()
    {
           
        $model = new Cities();
        if ($data = Yii::$app->request->post()) {
            $model->load($data);
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', "City created successfully.");
                return $this->redirect(['index']);
            }
        }
        return $this->render('create', [
            'model' => $model
        ]);
    }
    
    public function actionUpdate($id)
    {
        $model = Cities::findOne($id);
        if ($data = Yii::$app->request->post()) {
            $model->load($data);
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', "City Updated successfully.");
                return $this->redirect(['index']);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionTalukslist()
    {
        \yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $result = [];
        $post = yii::$app->request->post();
        if(isset($post['depdrop_parents'])){
            $parents = $post['depdrop_parents'];

        if( $parents != null){
            $distric_id = $parents[0];

            $talukalist = Cities::getTalukaslist($distric_id);
        }    
        if(!$distric_id){
            return ['output' => '','selected' => ''];
        }
        $tl = [];
        foreach($talukalist as $taluka){
            $tl [] = ['id' =>$taluka['id'],'name' => $taluka['name']];
        }
        return ['output' => $tl,'selected' => $distric_id];
        }
    }
    
}
