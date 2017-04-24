<?php

namespace backend\controllers;

use Yii;
use common\models\TravelPackage;
use common\models\search\TravelPackageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TravelPackageController implements the CRUD actions for TravelPackage model.
 */
class TravelPackageController extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /* Add new Travel Package 
     * 
     */

    public function actionCreatetravelpackage() {
        $model = new TravelPackage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->travel_package_id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    public function actionAdd() {
        $model = new \common\models\form\TravelPackageForm;
        $gameModel = new TravelPackage();
        $modelsAddress = [new \common\models\DetailPackagePrice];
        if ($model->load(Yii::$app->request->post())) {
//            echo $model->travel_package_name;
//            die();
            
            $modelsAddress = \backend\models\Model::createMultiple(\common\models\DetailPackagePrice::classname());
            \backend\models\Model::loadMultiple($modelsAddress, Yii::$app->request->post());
            $valid = \backend\models\Model::validateMultiple($modelsAddress);
           // if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                $gameModel->travel_package_name = $model->travel_package_name;
                $gameModel->city_id = $model->city_id;
                $gameModel->total_price =$model->total_price;
                $gameModel->minimum_person = $model->minimum_person;
                $gameModel->duration = $model->duration;
                $gameModel->quick_break = $model->quick_break;
                $gameModel->running_periode_start = $model->running_periode_start;
                $gameModel->running_periode_end = $model->running_periode_end;
                $gameModel->book_until = $model->book_until;
                $gameModel->description = $model->description;
                $gameModel->agenda = $model->agenda;
                $gameModel->detail = $model->detail;
                $gameModel->maps = $model->maps;
                $gameModel->room = $model->room;
                $gameModel->prepare = $model->prepare;
                $gameModel->terms = $model->terms;

                if ($flag = $gameModel->save(false)) {

                    foreach ($modelsAddress as $modelAddress) {
                        $modelAddress->tour_package_id = $gameModel->travel_package_id;
                        if (!($flag = $modelAddress->save(false))) {
                            $transaction->rollBack();
                            break;
                        }
                    }
                }
                if ($flag) {
                    $model->imageFiles = \yii\web\UploadedFile::getInstances($model, 'pic_name');
                    foreach ($model->imageFiles as $file) {
                        $model->imageFiles = \yii\web\UploadedFile::getInstances($model, 'pic_name');
                        $travelpicModel = new \common\models\TravelPic();
                        $travelpicModel->travel_package_id = $gameModel->travel_package_id;
                        $travelpicModel->pic_name = $file->baseName . '.' . $file->extension;
                        $travelpicModel->save();
                        $file->saveAs(\Yii::getAlias('@common/travelpackagepic/') . $file->baseName . '.' . $file->extension);
                    }
                    $transaction->commit();
                    return $this->redirect(['view', 'id' => $gameModel->travel_package_id]);
                }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
           // }
        }

        return $this->render('createtravelpackage', [
                    'model' => $model,
                    'modelsAddress' => (empty($modelsAddress)) ? [new \common\models\DetailPackagePrice] : $modelsAddress
        ]);
    }

    /**
     * Lists all TravelPackage models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new TravelPackageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravelPackage model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravelPackage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravelPackage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->travel_package_id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TravelPackage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->travel_package_id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TravelPackage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravelPackage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravelPackage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravelPackage::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
