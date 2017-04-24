<?php

namespace frontend\controllers;

use Yii;
use common\models\TravelPackage;
use common\models\search\TravelPackageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TravelPackageController implements the CRUD actions for TravelPackage model.
 */
class TravelPackageController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TravelPackage models.
     * @return mixed
     */
//    public function actionIndex()
//    {
//        $searchModel = new TravelPackageSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }
    public function actionBrowseall(){
        $travelpackageMdl = TravelPackage::findBySql("select * from travel_package")->all();
        
                return $this->render('browseall', [
                    'travelpackageMdl' => $travelpackageMdl
        ]);
    }
    public function actionDetail($id){
        $model = TravelPackage::findBySql("select * from travel_package where travel_package_id=".$id)->all();
        $modelorder = new \common\models\OrderList();
        $travelicon= \common\models\TravelPic::findBySql("select * from travel_pic where travel_package_id=".$id." limit 1")->all();
        $travelpicMdl = \common\models\TravelPic::findBySql("select * from travel_pic where travel_package_id=".$id)->all();
        $travelpackageMdl = TravelPackage::findBySql("select * from travel_package")->all();
        foreach($model as $data){
            $session = Yii::$app->session;
            $modelorder->total_price = $data['total_price'];
            $startDate = $data['running_periode_start'];
            $endDate = $data['running_periode_end'];
            $period = $data['duration'];
            $session['idtravel'] = $id;
            $session['start'] = $data['running_periode_start'];
            $session['end'] = $data['running_periode_end'];
        }
//        echo $startDate . '<br>';
//        echo $endDate . '<br>';
//        $start = strtotime($startDate);
//        $end = strtotime($endDate);
//        $durationTime = ($end - $start)/(24*60*60);
//        echo $durationTime;
        if ($modelorder->load(Yii::$app->request->post())) {
            echo $period;
            $modelorder->tour_package_id = $id;
            $modelorder->arrival_date = Yii::$app->request->post()['OrderList']['arrival_date'];
            $modelorder->total_price = 200000;
//            $modelorder->account_id = Yii::$app->user->identity->id;
            $modelorder->account_id = '1';
            $modelorder->special_request = Yii::$app->request->post()['OrderList']['special_request'];
            $modelorder->departure_date = date('Y-m-d',strtotime(Yii::$app->request->post()['OrderList']['arrival_date'].'+'.$period));
            $modelorder->proof_of_payment = "null";
            $modelorder->order_code = "0";
            $modelorder->status_verificatio = '0';
            $modelorder->save();
            
            return $this->redirect(['travel-package/browseall']);
        } else {
            return $this->render('detail', [
                    'model' => $model,
                    'travelicon'=>$travelicon,
                    'travelpicMdl'=>$travelpicMdl,
                    'travelpackageMdl' => $travelpackageMdl,
                    'modelorder'=>$modelorder
        ]);
        }
        
    }

    /**
     * Displays a single TravelPackage model.
     * @param integer $id
     * @return mixed
     */
//    public function actionView($id)
//    {
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//        ]);
//    }

    /**
     * Creates a new TravelPackage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//    public function actionCreate()
//    {
//        $model = new TravelPackage();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->travel_package_id]);
//        } else {
//            return $this->render('create', [
//                'model' => $model,
//            ]);
//        }
//    }

    /**
     * Updates an existing TravelPackage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
//    public function actionUpdate($id)
//    {
//        $model = $this->findModel($id);
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->travel_package_id]);
//        } else {
//            return $this->render('update', [
//                'model' => $model,
//            ]);
//        }
//    }

    /**
     * Deletes an existing TravelPackage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
//    public function actionDelete($id)
//    {
//        $this->findModel($id)->delete();
//
//        return $this->redirect(['index']);
//    }

    /**
     * Finds the TravelPackage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravelPackage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
//    protected function findModel($id)
//    {
//        if (($model = TravelPackage::findOne($id)) !== null) {
//            return $model;
//        } else {
//            throw new NotFoundHttpException('The requested page does not exist.');
//        }
//    }
}
